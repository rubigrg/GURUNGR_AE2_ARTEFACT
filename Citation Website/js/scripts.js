var infoContainer = document.getElementById("info-container").innerHTML,
    changeURL = document.getElementById("change-url"),
    authorLast,
    authorFirstInitial,
    year,
    organisation,
    viewDate,
    available;
document.getElementById('website-select').addEventListener('change', function () {
    var webSelect = document.getElementById("website-select");
    var webSelectValue = webSelect.options[webSelect.selectedIndex].value;
    if (webSelectValue == "1") {
        document.getElementById("input-web-author").setAttribute("hidden", "");
        document.getElementById("input-web-year").setAttribute("hidden", "");
        document.getElementById("input-web-title").setAttribute("hidden", "");
        document.getElementById("input-web-view").setAttribute("hidden", "");
        document.getElementById("input-web-date").setAttribute("hidden", "");
        document.getElementById("input-web-url").setAttribute("hidden", "");
        document.getElementById("website-local").setAttribute("hidden", "");
        document.getElementById("input-url").removeAttribute("hidden");
        document.getElementById("website-btn").removeAttribute("hidden");
    } else if (webSelectValue == "2") {
        document.getElementById("input-url").setAttribute("hidden", "");
        document.getElementById("website-btn").setAttribute("hidden", "");
        document.getElementById("input-web-author").removeAttribute("hidden");
        document.getElementById("input-web-year").removeAttribute("hidden");
        document.getElementById("input-web-title").removeAttribute("hidden");
        document.getElementById("input-web-view").removeAttribute("hidden");
        document.getElementById("input-web-date").removeAttribute("hidden");
        document.getElementById("input-web-url").removeAttribute("hidden");
        document.getElementById("website-local").removeAttribute("hidden");
    }
});
(function () {
    available = givenURL;
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var monthNum = String(today.getMonth() + 1).padStart(2, '0');
    switch (monthNum) {
        case "01":
            mm = "January";
            break;
        case "02":
            mm = "February";
            break;
        case "03":
            mm = "March";
            break;
        case "04":
            mm = "April";
            break;
        case "05":
            mm = "May";
            break;
        case "06":
            mm = "June";
            break;
        case "07":
            mm = "July";
            break;
        case "08":
            mm = "August";
            break;
        case "09":
            mm = "September";
            break;
        case "10":
            mm = "October";
            break;
        case "11":
            mm = "November";
            break;
        case "12":
            mm = "December";
            break;
        default:
            mm = monthNum;
    }
    var yyyy = today.getFullYear();
    today = dd + ' ' + mm + " " + yyyy;
    if (givenURL) {

        if (authorFull) {
            var removeSpace = authorFull.trim();
            authorLast = removeSpace.split(" ", 2)[1];
            authorFirstInitial = removeSpace.split(" ", 2)[0][0];

            var websiteFormat = [authorLast, " " + authorFirstInitial.toUpperCase() + " " + yyyy, " " + title.trim(), " viewed " + today, "<br>" + "available from " + available];
        } else {

            var websiteFormat = [yyyy, " " + title.trim(), " viewed " + today, "<br>" + "available from " + available];

        }
    }
    var formatTextInput;
    if (selectValueEl = "1") {
        formatTextInput = websiteFormat;
    }
    document.getElementById("formatted").innerHTML = formatTextInput;
}());
document.getElementById("website-local").onclick = function () {
    var authorWeb = document.getElementById("input-web-author").value;
    var yearWeb = document.getElementById("input-web-year").value;
    var titleWeb = document.getElementById("input-web-title").value;
    var webView = document.getElementById("input-web-view").value;
    var webToday = document.getElementById("input-web-date").value;
    var webURL = document.getElementById("input-web-url").value;
    var removeSpace = authorWeb.trim();
    authorLast = removeSpace.split(" ", 2)[1];
    authorFirstInitial = removeSpace.split(" ", 2)[0][0];
    var websiteFormatLocal = [authorLast, " " + authorFirstInitial.toUpperCase() + " " + yearWeb, " " + titleWeb.trim(), " viewed " + webToday, "<br>" + webURL];
    document.getElementById("formatted").innerHTML = websiteFormatLocal;
};
document.getElementById("Book-btn").onclick = function () {
    var authorBook = document.getElementById("input-book-author").value;
    var yearBook = document.getElementById("input-book-year").value;
    var titleBook = document.getElementById("input-book-title").value;
    var publisherBook = document.getElementById("input-book-publisher").value;
    var placeBook = document.getElementById("input-book-place-publication").value;
    var bookFormat = [authorBook, " " + yearBook, " " + titleBook, " " + publisherBook, " " + placeBook + "."];
    document.getElementById("formatted").innerHTML = bookFormat;
};
document.getElementById("journal-btn").onclick = function () {
    var authorJournal = document.getElementById("input-journal-author").value;
    var yearJournal = document.getElementById("input-journal-year").value;
    var titleArticleJournal = document.getElementById("input-article-title").value;
    var titleJournal = document.getElementById("input-journal-title").value;
    var volumeJournal = document.getElementById("input-journal-place-publication").value;
    var pageRangeJournal = document.getElementById("input-journal-page-range").value;
    var journalFormat = [authorJournal, " " + yearJournal, " " + titleArticleJournal, " " + titleJournal, " " + volumeJournal, " " + pageRangeJournal + "."];
    document.getElementById("formatted").innerHTML = journalFormat;
};

var bookInfo = document.getElementById("bookInfo").childNodes;

for (var i = 0; i < bookInfo.length; i++) {

    if (bookInfo[i].innerHTML == 'Originally published: ') {

        var parent = bookInfo[i].parentNode;


        var pubDate = bookInfo[i].nextElementSibling.innerHTML;
        break;

    } else {

        var pubDate = "(publish date not found)"
    }

}

for (var i = 0; i < bookInfo.length; i++) {


    if (bookInfo[i].innerHTML == "Publishers: ") {

        if (bookInfo[i].innerHTML.includes('Publishers: ')) {

            var pub = bookInfo[i].nextElementSibling.children;

            var i;
            var pubCount = [];
            for (i = 0; i < pub.length; i++) {
                txt = pub[i].innerHTML;
                pubCount.push(" " + txt);

            }
            break;

        }

    } else {
        var pub = "(publisher not found)";

        pubCount = [pub];
    }

}
var authorBook = name;
var yearBook = pubDate;
var titleBook = bookAutoTitle;
var publisherBook = pubCount;
var placeBook = "(insert place of publication)";



if (titleBook) {
    var removeSpace = authorBook.trim();
    authorLast = removeSpace.split(" ", 2)[1];
    authorFirstInitial = removeSpace.split(" ", 2)[0][0];
    var bookFormat = [authorLast, " " + authorFirstInitial.toUpperCase() + " ", " " + yearBook, " " + titleBook, " " + publisherBook + " " + placeBook + "."];
    document.getElementById("formatted").innerHTML = bookFormat;

}


var journalData = document.getElementById("journal-data");

var authorJournalAuto = journalData.querySelector("h3").innerHTML;

var journalAutoRest = journalData.querySelector("span").innerHTML;

var removeSpaceSemicolons = authorJournalAuto.replace(/;/g, '');

var journalFindMonthYear;

if (journalAutoRest.match(/(Jan(uary)?|Feb(ruary)?|Mar(ch)?|Apr(il)?|May|Jun(e)?|Jul(y)?|Aug(ust)?|Sep(tember)?|Oct(ober)?|Nov(ember)?|Dec(ember)?)\s+\d{4}/g)) {

    journalFindMonthYear = journalAutoRest.match(/(Jan(uary)?|Feb(ruary)?|Mar(ch)?|Apr(il)?|May|Jun(e)?|Jul(y)?|Aug(ust)?|Sep(tember)?|Oct(ober)?|Nov(ember)?|Dec(ember)?)\s+\d{4}/g);

    var dateData = journalFindMonthYear[0][0] + " " + journalFindMonthYear[0].slice(-4);

} else {
    var dateData = "(could not find journal date)";

}

var journalRemoveDateAuto = journalAutoRest.replace(/[,]\s\d{2}\s(Jan(uary)?|Feb(ruary)?|Mar(ch)?|Apr(il)?|May|Jun(e)?|Jul(y)?|Aug(ust)?|Sep(tember)?|Oct(ober)?|Nov(ember)?|Dec(ember)?)\s+\d{4}/g, '');

var journalFormatAuto = [removeSpaceSemicolons, " " + dateData, " " + journalRemoveDateAuto + "."];
document.getElementById("formatted").innerHTML = journalFormatAuto;
