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

    $('#resume').on('click', function (e) {
        e.preventDefault();
        $('#fileToUpload').click();
        return false;
    });
});

function triggerResume(e, self) {
    e.preventDefault();
    self.parentNode.getElementsByClassName('input-exec-img')[0].click();
    return false;
}

function fileSubmit(self) {
    var file = self.value;
    var fileName = file.split("\\");
    if (fileName == "") fileName = "Upload Picture";
    self.parentNode.getElementsByClassName('btn')[0].innerHTML = fileName[fileName.length - 1];

    readURL(self);
    uploadFile(self);
    return false;
}

// Auto preview uploads
function readURL(input) {
    if (input.files && input.files[0] && input.files[0].size > 10485759) {
        $(function () {
            new PNotify({
                title: 'Oh No!',
                text: 'File size limit is 10mb. Sorry!',
                type: 'error',
                nonblock: {
                    nonblock: true
                },
                styling: 'bootstrap3'
            });
        });
        return;
    }

    if (input.files && input.files[0]) {
        // Get destination of preview
        var preview = input.dataset.preview;
        var reader = new FileReader();

        reader.onload = function (e) {
            $(preview).attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function uploadFile(self) {
    var theForm = document.getElementById('website-form');

    var theFile = self.files[0];

    Parse.User.logIn(parseUser, parsePwd).then(function () {
        var promise = Parse.Promise.as();

        // First check file size (limit is 10mb)
        if (theFile.size > 10485759) {
            console.log("File too big");
            return Parse.Promise.error("File size too large.");
        }

        var ExecPhoto = Parse.Object.extend("ExecPhoto");
        var execPhotoObj = new ExecPhoto();

        var parseFile = new Parse.File(theFile.name, theFile);
        promise = promise.then(function () {
            return parseFile.save();
        }).then(function (img) {
            var tempUrl = img.url();
            tempUrl = (tempUrl.indexOf('https') == 0) ? tempUrl : "https" + tempUrl.substr(4);

            // Add parse file to obj
            execPhotoObj.set('picture', parseFile);
            execPhotoObj.set('pictureUrl', tempUrl);
            return execPhotoObj.save();
        }).then(function(rtnObj) {
            //console.log(rtnObj);
            self.dataset.parsedb = rtnObj.id;
        }, function (err) {
            console.log(err);
        });

        return promise;
    }, function (err) {
        console.log(err);
        $(function () {
            new PNotify({
                title: 'Oh No!',
                text: err.message,
                type: 'error',
                nonblock: {
                    nonblock: true
                },
                styling: 'bootstrap3'
            });
        });
    });
}

function formSubmit(theForm) {
    var name = document.getElementById("name"),
        email = document.getElementById("email"),
        program = document.getElementById("program"),
        portfolio = document.getElementById("portfolioUrl"),
        resume = document.getElementById("fileToUpload").dataset.url,
        about = document.getElementById("about"),
        why = document.getElementById("why");

    var Table = Parse.Object.extend("Applications");
    var application = new Table();
    application.set("name", name);
    application.set("email", email);
    application.set("program", program);
    application.set("portfolio", portfolio);
    application.set("resume", resume);
    application.set("about", about);
    application.set("why", why);

    application.save(null, {
        success: function(table) {console.log("success");},
        error: function(table, error) {console.log(error);}
    });
}