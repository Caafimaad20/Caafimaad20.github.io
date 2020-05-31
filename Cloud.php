<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sunrise Software</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;

  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

th {
  background-color: #4CAF50;
  color: white;
}



#customers tr:hover {background-color: #ddd;}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #3CBC8D;
  color: white;
}

input[type=text] {
  background-color: #ffa500;
  color: white;
text-align: center;

  border-radius: 10px;
}

tr:nth-child(even) {
  background-color: #FFFACD
}



</style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default custom-navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle btn custom-btn collapsed" data-toggle="collapse" data-target="#navbar-collapsed-menu">
                            <i class="fa fa-bars fa-lg"></i>
                        </button>
                      <h2><a href="home.php"    class="navbar-nav"  class="navbar navbar-light bg-light" style="padding:20px;text-decoration: none;" style="font-size:1px;">  Sunrise Software</a></h2>
                    </div>
                    <div id="navbar-collapsed-menu" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">
                        <li  class="active">
                            <a href="home.php">HOME</a>
                        </li>
                        <li >
                            <a href="about1.php">DEVELOPER</a>
                        </li>
                        <li>
                            <a href="projects1.php">PRODUCTS</a>
                        </li>
                        <!--<li>
                            <a href="blog1.php">COURSES</a>
                        </li>
                        <li>
                            <a href="contact1.php">EMAIL</a>
                        </li>-->
                         <li>
                            <a href="index.php">ARABIC</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div id="banner" class="container-fluid col-xs-12 ">
                <div id="banner-img" style="background-image:url(images/banner-project.jpg">
                    <div class="overlay">
                        <h1 class="title1">About Store </h1>
                    </div>
                </div>
                   </div>
 <div class="text-center">
                        <h2 > Cloud Apps</h2>
                    </div>

        </div>
<div class="row">
            <div class="container-fluid">
                <div class="col-md-12">
                    
                 
   <div class="text-center">
<!----
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="write App Name...." title="Type in a name"> 
-->


<input type="text" id="myInput" list="mylist" onkeyup="myFunction()" placeholder="Write App Name...." title="Type in a name"> 
   <datalist id="mylist">
    <option>Integrated Kg School System</option>
    <option>Integrated Primary School System</option>
    <option>Integrated Preparatory School System</option>
    <option>Integrated Secondary School System</option>
    <option>Integrated kg And Primary School System</option>
    <option>Integrated Primary And Preparatory School System</option>
    <option>Integrated Preparatory And Secondary School System</option>
    <option>Integrated kg And Primary And Preparatory School System</option>
    <option>Integrated Primary And Preparatory And Secondary School System</option>
    <option>Integrated kg And Primary And Preparatory And Secondary School System</option>
    <option>Integrated Institute System</option>
    <option>Integrated University System</option>
    <option>Integrated kg Schools System</option>
    <option>Integrated Primary Schools System</option>
    <option>Integrated Preparatory Schools System</option>
    <option>Integrated Secondary Schools System</option>
    <option>Integrated kg And Primary Schools System</option>
    <option>Integrated Primary And Preparatory Schools System</option>
    <option>Integrated Preparatory And Secondary Schools System</option>
    <option>Integrated kg And Primary And Preparatory Schools System</option>
    <option>Integrated Primary And Preparatory And Secondary Schools System</option>
    <option>Integrated kg And Primary And Preparatory And Secondary Schools System</option>
    <option>Integrated Institutes System</option>
    <option>Integrated Universities System</option>
    <option>Integrated Warehouse System</option>
    
    </datalist>


<div style="overflow-x:auto;">
<table id="myTable" Border="1" id="customers"  style="font-family:Jomhuria;font-size:100%;">
  <tr class="header">
   <th style="width:3%;">No</th>
    <th style="width:30%;">App Arabic Name</th>
     <th style="width:40%;">App English Name</th>
    <th style="width:12%;">App Type</th>
    <th style="width:10%;">Organization</th>
<th style="width:5%;">Download</th>
  </tr>
  <tr>
    <td>1</td>
    <td>نظام الإدارة االمدرسة التمهيدية المتكامل</td>
    <td>Integrated kg School System</td>
    <td>Cloud Desktop Apps</td>
    <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>2</td>
    <td>نظام الإدارة االمدرسة الإبتدائية المتكامل</td>
    <td>Integrated Primary School System</td>
    <td>Cloud Desktop Apps</td>
    <td>School</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>3</td>
    <td>نظام الإدارة االمدرسة الإعدادية المتكامل</td>
    <td>Integrated Preparatory School System</td>
    <td>Cloud Desktop Apps</td>
     <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>4</td>
    <td>نظام الإدارة االمدرسة الثانوية المتكامل</td>
    <td>Integrated Secondary School System</td>
    <td>Cloud Desktop Apps</td>
     <td>School</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
  <td>5</td>
    <td>نظام الإدارة االمدرسة التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary School System</td>
    <td>Cloud Desktop Apps</td>
    <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
  <td>6</td>
    <td>نظام الإدارة االمدرسة الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory School System</td>
    <td>Cloud Desktop Apps</td>
    <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
   <td>7</td>
    <td>نظام الإدارة االمدرسة الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary School System</td>
    <td>Cloud Desktop Apps</td>
 <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>8</td>
    <td>نظام الإدارة االمدرسة التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory School System</td>
    <td>Cloud Desktop Apps</td>
  <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>


<tr>
   <td>9</td>
    <td>نظام الإدارة االمدرسة الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary School System</td>
    <td>Cloud Desktop Apps</td>
     <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>10</td>
    <td>نظام الإدارة االمدرسة التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary School System</td>
    <td>Cloud Desktop Apps</td>
   <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>


 <tr>
    <td>11</td>
    <td>نظام الإدارة المعهد المتكامل</td>
    <td>Integrated Institute System</td>
    <td>Cloud Desktop Apps</td>
 <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>12</td>
    <td>نظام الإدارة الجامعة المتكامل</td>
    <td>Integrated University System</td>
    <td>Cloud Desktop Apps</td>
 <td>School</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>13</td>
    <td>نظام الإدارة المدارس التمهيدية المتكامل</td>
    <td>Integrated kg Schools System</td>
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>14</td>
    <td>نظام الإدارة المدارس الإبتدائية المتكامل</td>
    <td>Integrated Primary Schools System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
  <td>15</td>
    <td>نظام الإدارة المدارس الإعدادية المتكامل</td>
    <td>Integrated Preparatory Schools System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
  <td>16</td>
    <td>نظام الإدارة المدارس الثانوية المتكامل</td>
    <td>Integrated Secondary Schools System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
   <td>17</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary Schools System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>18</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory Schools System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>


<tr>
   <td>19</td>
    <td>نظام الإدارة المدارس الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary Schools System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>20</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory Schools System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>

 <tr>
    <td>21</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary Schools System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>22</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary Schools System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>23</td>
    <td>نظام الإدارة المعاهد المتكامل</td>
    <td>Integrated Institutes System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>24</td>
    <td>نظام الإدارة الجامعات المتكامل</td>
    <td>Integrated Universities System</td>
 
    <td>Cloud Desktop Apps</td>
    <td>Ministry</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>



  </tr>
  <tr>
    <td>25</td>
    <td>نظام الإدارة االمدرسة التمهيدية المتكامل</td>
    <td>Integrated kg School System</td>
    <td>Cloud Network Apps</td>
 <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>26</td>
    <td>نظام الإدارة االمدرسة الإبتدائية المتكامل</td>
    <td>Integrated Primary School System</td>
 
    <td>Cloud Network Apps</td>
   <td>School</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>27</td>
    <td>نظام الإدارة االمدرسة الإعدادية المتكامل</td>
    <td>Integrated Preparatory School System</td>
 
    <td>Cloud Network Apps</td>
 <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>28</td>
    <td>نظام الإدارة االمدرسة الثانوية المتكامل</td>
    <td>Integrated Secondary School System</td>
 
    <td>Cloud Network Apps</td>
  <td>School</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
  <td>29</td>
    <td>نظام الإدارة االمدرسة التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary School System</td>
 
    <td>Cloud Network Apps</td>
 <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
  <td>30</td>
    <td>نظام الإدارة االمدرسة الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory School System</td>
 
    <td>Cloud Network Apps</td>
   <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
   <td>31</td>
    <td>نظام الإدارة االمدرسة الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary School System</td>
 
    <td>Cloud Network Apps</td>
    <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>32</td>
    <td>نظام الإدارة االمدرسة التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory School System</td>
 
    <td>Cloud Network Apps</td>
 <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>


<tr>
   <td>33</td>
    <td>نظام الإدارة االمدرسة الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary School System</td>
 
    <td>Cloud Network Apps</td>
     <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>34</td>
    <td>نظام الإدارة االمدرسة التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary School System</td>
 
    <td>Cloud Network Apps</td>
     <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>


 <tr>
    <td>35</td>
    <td>نظام الإدارة المعهد المتكامل</td>
    <td>Integrated Institute School System</td>
 
    <td>Cloud Network Apps</td>
 <td>School</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>36</td>
    <td>نظام الإدارة الجامعة المتكامل</td>
    <td>Integrated University School System</td>
 
    <td>Cloud Network Apps</td>
   <td>School</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>37</td>
    <td>نظام الإدارة المدارس التمهيدية المتكامل</td>
    <td>Integrated kg Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>38</td>
    <td>نظام الإدارة المدارس الإبتدائية المتكامل</td>
    <td>Integrated Primary Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
  <td>39</td>
    <td>نظام الإدارة المدارس الإعدادية المتكامل</td>
    <td>Integrated Preparatory Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
  <td>40</td>
    <td>نظام الإدارة المدارس الثانوية المتكامل</td>
    <td>Integrated Secondary Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
   <td>41</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>42</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>


<tr>
   <td>43</td>
    <td>نظام الإدارة المدارس الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>44</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>

 <tr>
    <td>45</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>46</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>47</td>
    <td>نظام الإدارة المعاهد المتكامل</td>
    <td>Integrated Institutes Schools System</td>
 
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
    <td><a href="#" target="_blank">Download</a></td>
  </tr>
  <tr>
    <td>48</td>
    <td>نظام الإدارة الجامعات المتكامل</td>
    <td>Integrated Universities Schools System</td>
    <td>Cloud Network Apps</td>
    <td>Ministry</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>

 <tr>
    <td>49</td>
    <td>نظام الإدارة المستودعات المتكامل</td>
    <td>Integrated Warehouse System</td>
    <td>Cloud Desktop Apps</td>
    <td>Commercial Est	</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>

 <tr>
    <td>50</td>
    <td>نظام الإدارة المستودعات المتكامل</td>
    <td>Integrated Warehouse System</td>
    <td>Cloud Network Apps</td>
    <td>Commercial Est	</td>
   <td><a href="#" target="_blank">Download</a></td>
  </tr>
</table>
   </div>
     <br>
                          <h4  style="color:blue;font-family:Jomhuria";>
Please do not hesitate to contact us                                                                          
<br>
  
                        </h4>
       <a href="about1.php" class="btn btn-default custom-btn-main">
           Contact Us
       </a>
  </div>
</div>
</div>
       <br>
               <div id="footer" class="row">
            <div class="container-fluid">
                <div class="col-xs-12 text-center">
                    <h2>
                       Sunrise Software
                    </h2>
                    <hr style="width:5%;border-top:3px solid #EEE;">
                </div>
                <div id="footer-nav-links" class="col-xs-12 text-center">
                  <a href="home.php">HOME</a>
                  <a href="about1.php">DEVELOPER</a>
                  <a href="projects1.php">PRODUCTS</a>
                  <!--<a href="blog1.php">COURSES</a>
                  <a href="contact1.php">EMAIL</a>-->
                  <a href="index.php">ARABIC</a>
                </div>
                <!--<hr>
                <div class="col-xs-12 text-center">
                    <form class="form form-inline">
                        <label class="custom-heading">Subscribe to our newsletter</label>
                        <br>
                        <div class="input-group input-group-lg">
                            <input id="footer-email" placeholder="البريد الإلكتروني" required type="text" class="form-control"> 
                           <input type="email" name="email" placeholder="Email" required class="form-control custom-form-control input-lg">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary custom-btn-primary custom-btn">FOLLOW</button>
                            </div>
                        </div>
                    </form>
                </div>-->
                <hr>
                <div class="col-xs-12 text-center">
                    <h5>All rights reserved 2016 &copy; </h5>
                </div>
            </div>
        </div>

   </div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

    <script src="js/jquery-2.2.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>>