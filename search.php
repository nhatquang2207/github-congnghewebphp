<?php
  if (isset($_REQUEST['btnSearch'])) 
  {
      include("./connect.php");
      // Gán hàm addslashes để chống sql injection
      $search = addslashes($_GET['search']);

      // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
      if (empty($search)) {
          echo "Yeu cau nhap du lieu vao o trong";
      } 
      else
      {
          // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
          

          // Kết nối sql

          // Đếm số đong trả về trong sql.
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows > 0) {
            echo '<table class="table table-hover m-1">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Chuc vu</th>
                      <th scope="col" style="width: 30px;"></th>
                    </tr>
                  </thead>';
            $i = 1;
            while ($row = $result->fetch_assoc()) {
      
              $id_nv = $row["id_nv"];
              $fullname = $row["fullname"];
              echo '
        <tbody>
          <tr>
            <th scope="row">' . $i . '</th>
            <td>' . $fullname . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['chucvu'] . '</td>
            <td><a href="../component/profile.php?id=' . $id_nv . '"><button type="button" class="btn btn-primary">XEM</button></a>
            </td>
          </tr> ';
              $i++;
            }
            echo '  </tbody>
                  </table>';
          }
          else
          {
            echo 'Dữ liệu bạn tìm kiếm không tồn tại ';
          }
      }
  }


?>