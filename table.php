
<!DOCTYPE html>
<html>
<head>
    <title>
        Book Report
    </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    
</head>
<body>
    
   
<table id="example" class="display nowrap" style="width:100%">
      
     <thead>
            <tr>
                <th>ID</th>
                <th>Img</th>
                <th>bname</th>
                <th>qua</th>
                <th>author</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>

            
                        <?php

                        
                //echo $_SESSION['cartid'];
                $con=mysqli_connect("localhost","root","","reg");
                $query = "SELECT * FROM bookcp";
                $result = mysqli_query($con,$query);

               
                while($row = mysqli_fetch_assoc($result))
                { 
                  
                    
                         echo '<tr><td>'.$row['id'].'</td>
                            <td>   </td>
                            <td> '.$row['bname'].'</td>
                            <td> '.$row['price'].'</td>
                            <td>  '.$row['quant'].'</td>
                            <td>'.$row['quant'].'</td></tr>'; 
                    
                }
                //echo '<script>alert("BOOK ADD ON YOUR CART")</script>';
 ?>
        </tbody>
        
    
</table>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
                   
         
    <script>
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

 
    </script>
                        
</body>
</html>