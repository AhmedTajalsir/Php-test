<?

require_once 'header.php';

?>

          <!-- end: Left Menu -->
  <body>

  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="asset/img/avatar.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    Invoice Test
  </a>
</nav>

          <div class="container">
          
                      <div class="responsive-table">
                      <table id="datatables-example" class="table" width="100%" cellspacing="0" style="text-align: right;">
                      <thead class="thead-dark">
                        <tr>
                          <th>#</th>
                          <th> Price </th>
                          <th> Qty </th>
                          <th> Total </th>
                        </tr>
                      </thead>
                      <tbody>

                        <?
                        $result = calcolute();
                          foreach($result as $row){
                     
                       ?>

                        <tr>
                          <td><? echo $row['id']; ?> </td>
                          <td> <? echo $row['price']; ?> </td>
                          <td><? echo $row['qty']; ?> </td>
                          <td><? echo $row['total']; ?></td>
                        </tr>
                        <? } ?>

                      </tbody>
                        </table>
                      </div>
                  </div>

<!-- start: Javascript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>