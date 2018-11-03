<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script>
$(document).ready(function(){
    // array to hold link titles
    let titles = [];

    // select all h2 and h3's
    $("h2, h3").each(function() {

        // generate random number for id
        let randomNum = Math.floor(Math.random() * 100000);

        // html to append to unordered list after links are generated
        const content = "<li><a class='link' href='./#" + randomNum.toString() + "'/></a></li>" 

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
    })

    // add the link titles to the anchor tags
    let index = 0;
    $("a.link").each(function(){
        $(this).text(titles[index]);
        index++;
    })
});
</script>
</head>
<body>

<div class="row container">
    <div class="col-md-6">
        <h2>This is a heading 1</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 2</h2>
        <p>This is a p element.</p>

        <h2 class="ignore">This is a heading 3</h2>
        <p>This is a p element.</p>

        <h2 data-alt-title="No, it's a heading 5">This is a heading 4</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 5</h2>
        <p>This is a p element.</p>

        <h3>This is a heading 6</h3>
        <p>This is a p element.</p>

        <h3>This is a heading 7</h3>
        <p>This is a p element.</p>

        <h3 class="include">This is a heading 8</h3>
        <p>This is a p element.</p>

        <h2>This is a heading 9</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 10</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 11</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 12</h2>
        <p>This is a p element.</p>

        <h2 data-alt-title="Is this a heading 13?">This is a heading 13</h2>
        <p>This is a p element.</p>

        <h2 class="ignore">This is a heading 14</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 15</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 16</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 17</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 18</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 19</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 20</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 21</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 22</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 23</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 24</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 25</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 26</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 27</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 28</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 29</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 30</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 31</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 32</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 33</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 34</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 35</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 36</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 37</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 38</h2>
        <p>This is a p element.</p>

        <h2>Hi, my name is Frank!</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 40</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 41</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 42</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 43</h2>
        <p>This is a p element.</p>

        <h2>This is a heading 44</h2>
        <p>This is a p element.</p>
        

 
    </div>
    <div class="col-md-6">
        <h2>Links</h2>
        <div>
            <ul class="links">
            </ul>   
        </div>
    </div>     
</div>
</body>
</html>