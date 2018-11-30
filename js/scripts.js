/*  After learning how to manipulate mySQL database with PHP, I want to post titles
and links arrays to database with this page id on first load.  When the page is edited,
I want to update the database to changed variable to true. When page is created
I want to add a row to database table with pageID, changed, titles, and links columns. 
Then, before running below script, I want to check the database if changed == true 
or if titles and links is empty. If not, run the script and then post titles and links arrays. After posting
I need to set changed variable to false.  Otherwise, if arrays aren't empty and changed is false,
use database titles and links to create the sidebar menu links. If changed == true, get 
titles and links from backend, and run separate script to generate new from front end.
Compare titles.  If they don't match update titles from back at that index with
titles from front. Then, if link from front doesn't match any links from back, update link
from back at that index with link from front. Then set front arrays equal to back arrays. Run
script like a first time, and post titles and links arrays.  Overwrite the row. After posting, set changed 
to false. */

//generate titles and links arrays from front end 
$(document).ready(function(){
 
    // get the pageID
    const div = $("#pageID");
    const pageID = div.text();
    
    // generate links from headers in article for sidebar menu
    // array to hold link titles
    let titles = [];
    let links = [];

    // select all h2 and h3's
    $("h2, h3").each(function() {

        // generate random number for id
        let randomNum = Math.floor(Math.random() * 100000);

        // html to append to unordered list after links are generated
        const content = "<li><a class='link' href='#" + randomNum.toString() + "'/></a></li>" ;
        links.push(content);

        // add unique id to each h2 or h3
        $(this).attr("id", randomNum.toString());

        /* unless h2 or h3 has class of ignore and does not have data-alt-title, set title to 
        text of header element */
        if (!$(this).hasClass("ignore") && !$(this).data("alt-title")) {
            let title = $(this).html();

            // add title to array
            titles.push(title);

            // insert the anchor tag
            $("ul.links").append(content);
        }
        
        // otherwise, set title to the data-alt-title attribute text
        else if ($(this).data("alt-title")) {
            let title = $(this).data("alt-title");

            // add title to array
            titles.push(title);

            // insert the anchor tag
            $("ul.links").append(content);
        }
    });

    // add the link titles to the anchor tags
    let index = 0;
    $("a.link").each(function(){
        $(this).text(titles[index]);
        index++;
    });

    /* smooth scroll to anchor
    https://stackoverflow.com/questions/7717527/smooth-scrolling-when-clicking-an-anchor-link */
    $('a[href^="#"]').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top-20
        }, 500);
        var hash = $(this).attr('href');
        window.location.hash = (hash);
        return false;
    });
    
    // menu open and close functions
    function openNav() {
                $("#mySidenav").css("width", "250px");
                $("#closebtn").css("display", "block");
                $("#open-menu").html("Contents ");
                $("#open-menu").css("margin-right", "60px");
            }

    function closeNav() {
        $("#mySidenav").css("width", "0");
        $("#closebtn").css("display", "none");
        $("#open-menu").html("Contents &#9776;");
        $("#open-menu").css("margin-right", "25px");
    }
    
    // menu open and close click handlers
    $("#open-menu").click(function(){
                openNav();
            });
            
    $("#closebtn").click(function(){
        closeNav();
    });
    
    // submit hidden form to server if it hasn't been submitted already
    let submittedDiv = $("#submitted");
    let submitted = submittedDiv.text();
    if (submitted === 'false') {
        console.log(submitted);
        $("#order").click();
    }
});
