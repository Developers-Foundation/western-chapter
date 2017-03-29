/**
 * Created by harrisonchow on 3/27/17.
 */

$(document).ready(function() {
    // initialize Parse connection as soon as doc ready
    Parse.initialize("df-recruit-db");
    Parse.serverURL = 'https://df-recruit-db.herokuapp.com/parse';

    $('#formSubmitButton').click(function(e) {
        e.preventDefault();
        formSubmit(this);
        return false;
    });

    // Add event listener for click on the A tag to trigger file upload box
    $('#resumeA').click(function(e) {
        e.preventDefault();
        $('#fileToUpload').click();
        return false;
    });

    // Once file is done adding to page
    $('#fileToUpload').change(function(e) {
        fileSubmit(this);
    });

    var lol = true;
    setInterval(function() {
        var e = document.getElementById("lol");
        if (e) {
            if (lol) {
                e.innerHTML = "_";
                lol = false;
            } else {
                e.innerHTML = " ";
                lol = true;
            }
        }
    },700);
});

function fileSubmit(self) {
    var file = self.value;
    var fileName = file.split("\\");
    if (fileName == "") fileName = "resume";
    self.parentNode.getElementsByClassName("fileName")[0].innerHTML = fileName[fileName.length - 1];

    uploadFile(self);
    return false;
}

function uploadFile(self) {
    var theFile = self.files[0];

    Parse.User.logIn('user', 'pass').then(function () {
        var promise = Parse.Promise.as();

        // First check file size (limit is 10mb)
        if (theFile.size > 10485759) {
            console.log("File too big");
            return Parse.Promise.error("File size too large.");
        }

        var Resume = Parse.Object.extend("Resume");
        var resume = new Resume();

        var parseFile = new Parse.File(theFile.name, theFile);
        promise = promise.then(function () {
            return parseFile.save();
        }).then(function (img) {
            var tempUrl = img.url();
            tempUrl = (tempUrl.indexOf('https') == 0) ? tempUrl : "https" + tempUrl.substr(4);

            // Add parse file to obj
            resume.set('resume', parseFile);
            resume.set('link', tempUrl);
            return resume.save();
        }).then(function(rtnObj) {
            //console.log(rtnObj);
            self.dataset.parsedb = rtnObj.id;
        }, function (err) {
            console.log(err);
        });

        return promise;
    }, function (err) {
        console.log(err);
    });
}

function formSubmit(theForm) {
    var name = document.getElementById("name").value,
        email = document.getElementById("email").value,
        program = document.getElementById("program").value,
        position = document.getElementById("position").options[document.getElementById("position").selectedIndex].value,
        portfolio = document.getElementById("portfolioUrl").value,
        resume = document.getElementById("fileToUpload").dataset.parsedb,
        about = document.getElementById("about").value,
        why = document.getElementById("why").value;

    Parse.User.logIn('user', 'pass').then(function () {
        var Table = Parse.Object.extend("Applications");
        var application = new Table();
        application.set("name", name);
        application.set("email", email);
        application.set("program", program);
        application.set("portfolio", portfolio);
        application.set("resume", resume);
        application.set("about", about);
        application.set("why", why);

        return application.save();
    }).then(function(obj) {
        console.log("success");
        console.log(theForm);
        document.getElementById("theForm").parentNode.innerHTML = "<div style='text-align: left; margin-top: 100px'>" +
            "<h4 id='thank'>Thank You for Submitting your Application</h4><br>" +
            "<p id='msg'>We will get back to you as soon as possible <span id='lol'>_</span></p>" +
            "<p class='text'></p>" +
            "</div>";

        var phrases = ['If you have any queries,', 'please direct them to', 'harrison@developersfoundation.ca', 'or just email me to chat :)'];

        var el = document.querySelector('.text');
        var fx = new TextScramble(el);

        var counter = 0;
        var next = function next() {
            fx.setText(phrases[counter]).then(function () {
                setTimeout(next, 1200);
            });
            counter = (counter + 1) % phrases.length;
        };

        next();
    }, function(err) {
        console.log("error");
        console.log(err);
    });
}

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

// ——————————————————————————————————————————————————
// TextScramble
// ——————————————————————————————————————————————————

var TextScramble = function () {
    function TextScramble(el) {
        _classCallCheck(this, TextScramble);

        this.el = el;
        this.chars = '!<>-_\\/[]{}—=+*^?#________';
        this.update = this.update.bind(this);
    }

    TextScramble.prototype.setText = function setText(newText) {
        var _this = this;

        var oldText = this.el.innerText;
        var length = Math.max(oldText.length, newText.length);
        var promise = new Promise(function (resolve) {
            return _this.resolve = resolve;
        });
        this.queue = [];
        for (var i = 0; i < length; i++) {
            var from = oldText[i] || '';
            var to = newText[i] || '';
            var start = Math.floor(Math.random() * 40);
            var end = start + Math.floor(Math.random() * 40);
            this.queue.push({
                from: from,
                to: to,
                start: start,
                end: end
            });
        }
        cancelAnimationFrame(this.frameRequest);
        this.frame = 0;
        this.update();
        return promise;
    };

    TextScramble.prototype.update = function update() {
        var output = '';
        var complete = 0;
        for (var i = 0, n = this.queue.length; i < n; i++) {
            var theQueue = this.queue[i];
            var from = theQueue.from;
            var to = theQueue.to;
            var start = theQueue.start;
            var end = theQueue.end;
            var theChar = theQueue.theChar;

            if (this.frame >= end) {
                complete++;
                output += to;
            } else if (this.frame >= start) {
                if (!theChar || Math.random() < 0.28) {
                    theChar = this.randomChar();
                    this.queue[i].theChar = theChar;
                }
                output += '<span class="dud">' + theChar + '</span>';
            } else {
                output += from;
            }
        }
        this.el.innerHTML = output;
        if (complete === this.queue.length) {
            this.resolve();
        } else {
            this.frameRequest = requestAnimationFrame(this.update);
            this.frame++;
        }
    };

    TextScramble.prototype.randomChar = function randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)];
    };

    return TextScramble;
}();