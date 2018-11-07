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
    <body>
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
                <span id="open-menu" class="open-menu" onclick="openNav()">Contents &#9776;</span>
                <a id="closebtn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
        </div>

        <!-- Scripts -->
        <script>
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
        </script>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Custom JS -->
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>
</html>