<?php include 'inc/header.php';?>
<section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                	<?php
		               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		               		$name = $_POST['name'];
							$title = mysqli_real_escape_string($db->link, $title);
							$body = mysqli_real_escape_string($db->link, $body);
							$author = mysqli_real_escape_string($db->link, $author);
						    $permited  = array('jpg', 'jpeg', 'png', 'gif');
						    $file_name = $_FILES['image']['name'];
						    $file_size = $_FILES['image']['size'];
						    $file_temp = $_FILES['image']['tmp_name'];

						    $div = explode('.', $file_name);
						    $file_ext = strtolower(end($div));
						    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
						    $uploaded_image = "upload/".$unique_image;
							if ($title="" || $body="" || $author="" || $file_name="") {
								echo "<span style='color:red;font-size:18px;'>Field must not be empty.!</span>";
							}else{
								$query = "";
								$bloginsert = $db->update($query);
								if ($bloginsert) {
									echo "<span style='color:green;font-size:18px;'>Blog inserted successfully.!</span>";
								}else{
									echo "<span style='color:red;font-size:18px;'>Blog not inserted.!</span>";
								}
							}
						}
					?>
                    <form id="edit-profile" action="" method="post" enctype="multipart/form-data">
                        <h2>Add New Post</h2>
                        <label>Title</label>
                        <input type="text" name="title" placeholder="Enter Blog Title..." class="medium" ><br>
                        
                        <label>Upload Image</label>
                        <input type="file" name="image" accept="image/*"><br>

                        <label>Content</label>
                        <textarea name="body" id="" rows="5"></textarea><br>
                        <label>Author</label>
                        <input type="text" name="author" placeholder="Enter Author Name..." class="medium"><br>
                        
                        <input type="submit" name="submit" Value="Save" />
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

