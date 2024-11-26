
$gw-blue: rgb(52, 152, 219); 
$gw-red: rgb(192, 57, 43);
$gw-blue-dark: rgb(27, 79, 114); 
$gw-red-dark: rgb(123, 36, 28); 
  

.button {
  font-family:'Open Sans';
  font-size: 16px;
  font-weight:400;
  display:inline-block;
  color:#FFF;
  border-radius: .25em;
  text-shadow: -1px -1px 0px rgba(0,0,0,0.4);
}

.primary {
  line-height:40px;
  transition:ease-in-out .2s;
  padding: 0 16px;
}

.primary:hover, .condensed:hover, .touch:hover {
  transform:scale(1.02);
  box-shadow:2px 2px 5px rgba(0,0,0,0.20), inset 0 0 0 99999px rgba(0,0,0,0.2);
}
/* 2nd alternate hover colors if hover inset shadow not working properly 
.edit:hover {
  background: darken($gw-blue, 10%);
}

.delete:hover {
  background: darken($gw-red, 10%);
}
*/

.condensed {
  transition:ease-in-out .2s;
  line-height:24px;
  padding: 0 8px;
  box-shadow: 1px 1px 1px rgba(0,0,0,0.25);
}

.touch {
  transition:ease-in-out .2s;
  line-height:40px;
  width:40px;
  padding: 0px;
  text-align: center;
}

.inlineIcon {}

.edit:before,.delete:before {
  font-family: FontAwesome;
  display: inline-block;
  font-size:1rem;
  padding-right:12px;
  background:none;
  color:#FFF;
}

.condensed.edit:before,.condensed.delete:before {
   content:none;
}

.touch.edit:before,.touch.delete:before {
  width:100%;
  text-align:center;
  font-size:1.25rem;
}

.inlineIcon.edit, .inlineIcon.delete {
  background: transparent;
}

.inlineIcon.edit:before,.inlineIcon.delete:before {
  line-height:32px;
  font-size:32px;
  padding:4px 0px;
}

.edit {
  background: $gw-blue;
  
  &:before {
    content: "\f040";
  }
}

.inlineIcon.edit:before {
    color: $gw-blue;
}



.delete {
  background: $gw-red;
  
  &:before {
    content: "\f1f8";
  }
}

.inlineIcon.delete:before {
    color: $gw-red;
}

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<a class="button primary edit">Edit</a>

<br><br>


<a class="button primary delete">Delete</a>

<br><br>