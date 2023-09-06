
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title> Donations </title>  
      <style type="text/css"> 

           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: #FFFFFF;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background-color: red;  
                color: #00FFFF;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: #797676;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color:#00FFFF;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <table border="1">  
           <tr>  
                <th>ID</th>  
                <th>Name</th>  
                <th>Email</th>  
                <th>Contact</th> 
                <th>Amount</th>
                <th>Date</th>


           </tr>  
           <?php  
           

        $conn = mysqli_connect('localhost','root','','donation_db'); 
                $result=$conn->query("SELECT * FROM donateform");
                foreach ($result as $value){
                          echo "  
                               <tr>  
                               <td>".$value['id']."</td>  
                               <td>".$value['name']."</td>  
                               <td>".$value['email']."</td>  
                               <td>".$value['contact']."</td> 
                               <td>".$value['amount']."</td>
                               <td>".$value['date']."</td>  
                               </tr>  
                          ";  
                     }  
                  
           ?>  
      </table>  
 </div>  
 </body>  
 </html> 

