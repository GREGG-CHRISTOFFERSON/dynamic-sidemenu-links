<?php
    
    // remember if form has already been submitted
    if (!isset($_POST['order'])) {
        $submitted = 'false';
    } else {
        $submitted = 'true';
    }
    
    // get the page id
    $pageID = "02";
?>
<!DOCTYPE html>
<html>
    <head>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        <!--Plugins-->
        <link rel="stylesheet" href="css/SideMenu.css">

    </head>
    <!-- hidden page ID for JQuery selectors-->
    <div id="submitted" style="display:none;"><?=$pageID?></div>
    <!-- hidden submitted variable for JQuery selectors-->
    <div id="submitted" style="display:none;"><?=$submitted?></div>
        
    <body>
        <h1>Gathering Form Input: POST</h1>
        <form id="theForm" method="post">
            <p>
                <label for="textfield">Text Field:</label>
                <input type="text" name="textfield" id="textfield">
            </p>
            <p>
                <label for="quantity">Number:</label>
                <input name="quantity" type="number" id="quantity" min="0" value="0">
            </p>
            <p>
                <label for="color">Color:</label>
                <select name="color" id="color">
                    <option value="yellow" selected>Yellow</option>
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="orange">Orange</option>
                </select>
            </p>
            <p>
                <input type="submit" name="order" id="order" value="Order">
                <input type="hidden" name="price" id="price" value="3">
            </p>
        </form>
        <pre>
        <?php
        if (isset($_POST['order'])) {
                print_r($_POST);
                $submitted = true;
        }
        ?>
        </pre>
        <div class="row container">
            <div class="col-md-6 pull-left">
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
                
                <h2>This is a heading 45</h2>
                <p>This is a p element.</p>

                <h2>This is a heading 46</h2>
                <p>This is a p element.</p>

                <h2>This is a heading 47</h2>
                <p>This is a p element.</p>

                <h2>This is a heading 48</h2>
                <p>This is a p element.</p>

                <h2>This is a heading 49</h2>
                <p>This is a p element.</p>

                <h2>This is a heading 50</h2>
                <p>This is a p element.</p>

         
            </div>
            
            <div id="mySidenav" class="col-md-6 stick slideout-menu sidenav">
                <h2>Links</h2>
                <div>
                    <ul class="links">
                    </ul>   
                </div>
            </div> 

            <div class="sidebar">
                <span id="open-menu" class="open-menu">Contents &#9776;</span>
                <a id="closebtn" href="javascript:void(0)" class="closebtn" >&times;</a>
            </div>
        </div>
        <!-- Scripts -->
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Custom JS -->
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>
</html>