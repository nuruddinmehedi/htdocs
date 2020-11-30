

<!DOCTYPE html>
<html>
<head>
<style>
    
* {
  box-sizing: border-box;
}

input[type=text], select, textarea,radio,checkbox {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
</style>

</head>
<body>

<div class="container">
  <form action="" name="form" onsubmit="myfunction(); return false;">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div><div><tr>
  <td>gender:</td>
                <td><input type="radio" value="male" name="radio" required="1">male
                <input type="radio" name="radio" value="female">female</td>
                

            </tr></div><div>
            <tr>           

                <td>dept:</td>
                <td><input name="checkbox" type="checkbox" value="math">math</td>
                <td><input name="checkbox" type="checkbox" value="bangla">bangla</td>
                <td><input name="checkbox" type="checkbox" value="law">law</td>
            </tr></div> 
        
  <div class="row">
    <div class="col-25">
      <label for="country">Country</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>


<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>dep</th>
    <th>gender</th>
    <th>country</th>
  </tr>
 
  <tr>
    <td ><p id="fristname"></p></td>
    <td ><p id="lastname1"></p></td>
    <td><p id="ckeckbox"></p></td>
    <td ><p id="radio"></p></td>
    <td ><p id="selectoption"></p></td>


  </tr>
 
</table>

<script>
    function myfunction() {
        var checkedmaltipal="";
       var radiomaltipal="";
        var fristName= document.form.firstname.value;
        document.getElementById('fristname').innerHTML=fristName;
        
       
        var lastName= document.form.lastname.value;
        document.getElementById('lastname1').innerHTML=lastName;
     
        var radiolenth= document.form.radio.length;
        for(i=0;i<radiolenth;i++){
             
            var checkedvalue= document.form.radio[i].checked;
            if (checkedvalue ){
                radiomaltipal +=document.form.radio[i].value
                document.getElementById('radio').innerHTML=radiomaltipal;
            }
        }
           
        var checkedlangth= document.form.checkbox.length;
        for(i=0;i<checkedlangth;i++){
             
            var checkedvalue1= document.form.checkbox[i].checked;
            if (checkedvalue1 ){
                checkedmaltipal +=document.form.checkbox[i].value
                document.getElementById('ckeckbox').innerHTML=checkedmaltipal;
            }
        }
        
        var selectindex= document.form.country.selectedIndex;
        var selectionvalue= document.form.country.options[selectindex].value;
         document.getElementById('selectoption').innerHTML= selectionvalue;
      
    }
   
    </script>
</body>
</html>



