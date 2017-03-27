/**
 * Created by harrisonchow on 3/27/17.
 */

$(document).ready(function() {
    // initialize Parse connection as soon as doc ready
    Parse.initialize("df-recruit-db");
    Parse.serverURL = 'https://df-recruit-db.herokuapp.com/parse';

    $('#theForm').submit(function(e) {
        e.preventDefault();
        formSubmit(this);
        return false;
    });

    $('#resume').on('click', function () {
        console.log("clicked");
        $('#fileToUpload').click(changeName);
    });
});

function changeName() {
    $('var fu1 = document.getElementById("FileUpload1");
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