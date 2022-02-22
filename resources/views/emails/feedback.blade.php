<!DOCTYPE html>
<html>
<head>
<table>
<style>
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
}
.header {
  padding: 20px;
  text-align: center;
  background: #bdbdbd;
  color: black;
  font-size: 30px;
}

       
       
         </style>
         <body style="padding:20px;">
    <div class="header" style="text-align: center;">
    <img class="logo" alt="Porto" width="123" height="48"
                                        src="{{asset('home')}}/img/portus-logo.png">
      </div>
       <p>You have a new feedback.</p>
       
        

    <tr>
        <td>Firstname</td>
        <td>{{$first_name}}</td>
    </tr>
  <tr>
    <td>Lastname</td>
    <td>{{$last_name}}</td>
  </tr>
  <tr>
  <td>Mailid</td>
  <td>{{$mail_id}}</td>
</tr>
<tr>
  <td>Feedback</td>
  <td>{!!$message1!!}</td>
</tr>
</table>
</head>
</html>
