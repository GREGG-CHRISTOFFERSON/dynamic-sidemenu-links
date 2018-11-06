$(document).ready(function(){
    // generate links from headers in article for sidebar menu
    // array to hold link titles
    let titles = [];

    // select all h2 and h3's
    $("h2, h3").each(function() {

        // generate random number for id
        let randomNum = Math.floor(Math.random() * 100000);

        // html to append to unordered list after links are generated
        const content = "<li><a class='link' href='#" + randomNum.toString() + "'/></a></li>" ;

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
            scrollTop: $( $(this).attr('href') ).offset().top - 20
        }, 500);
        return false;
    });
});
