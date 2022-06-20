/* Basic Style */

body {
	color: #333;
	font-family: Lato, sans-serif;
	background-image: linear-gradient(to right top, #0c7c07, #009a6c, #00b3b4, #6ac7e3, #bedbf7, #d2dcfe, #e9ddff, #ffdefc, #ffc0e1, #ffa2b0, #ff8e6e, #f88a14);
}

.container {
	display: block;
	width: 400px;
	margin: 10px auto 100px;
	padding:0px 10px 10px 10px;
	border-radius:10px
}

h2 {
	text-align:center;
	padding-top:10px;
	margin-bottom:0px;
}

ul {
	margin: 0;
	padding: 0;
}

li * {
	float: left;
}

li,
h3 {
	clear: both;
	list-style: none;
}

input,
button {
	outline: none;
}
#btn {
    font-size: 16px;
    letter-spacing: 2px;
    font-weight: 800 !important;
    background-image: linear-gradient(to right top, #0c7c07, #009a6c, #00b3b4, #6ac7e3, #bedbf7, #d2dcfe, #e9ddff, #ffdefc, #ffc0e1, #ffa2b0, #ff8e6e, #f88a14);
    color: #black;
    padding: 6px 10px;
    margin: 5px;
    text-align: center;
    display: inline-block !important;
    text-decoration: none;
    border: 0px;
	border-radius: 6px;
    width: max-content;
    cursor: pointer;
    transition: all 0.3s 0s ease-in-out;
}
#btn:hover {
    background-color: rgb(216, 10, 27);
    text-decoration: none;
}
h3,
label[for='new-task'] {
	color: #333;
	font-weight: 700;
	font-size: 15px;
	border-bottom: 2px solid #333;
	padding: 20px 0 10px;
	margin: 0;
	text-transform: uppercase;
}

input{
	margin: 5px;
	font-size: 18px;
	line-height: 28px;
	height: 35px;
	width: 100%;
	padding: 5px;
	<!-- border: 1px solid #ddd; -->
	background: #fff;
	border-radius: 25px;
	font-family: Lato, sans-serif;
	color: #888;
}

input[type="text"]:focus {
	color: #333;
}

label[for='new-task'] {
	display: block;
	margin: 0 0 20px;
}

input#new-task {
	float: left;
	width: 318px;
}

p > button:hover {
    background-color: rgb(216, 10, 27);
    text-decoration: none;
	color: #0FC57C;
}

li {
	overflow: hidden;
	padding: 20px 0;
	border-bottom: 1px solid #eee;
}

li > input[type="checkbox"] {
	margin: 0 10px;
	position: relative;
	top: 15px;
	width:40px;
	height:20px;
}

li > label {
	font-size: 18px;
	line-height: 40px;
	width: 237px;
	padding: 0 0 0 11px;
}

li > input[type="text"] {
	width: 226px;
}

li > .delete:hover {
	color: #CF2323;
}


#completed-tasks label {
	text-decoration: line-through;
	color: #888;
}


ul li input[type=text] {
	display: none;
}

ul li.editMode input[type=text] {
	display: block;
}

ul li.editMode label {
	display: none;
}