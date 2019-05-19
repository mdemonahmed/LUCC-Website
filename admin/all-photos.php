<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Gallery</h2>
                        <a href="#" class="btn btn-outline-dark" style="padding: 2px 10px;">Add New</a>
                        
                        <div class="posts-info">
                            <div class="float-left">
                                <a href="#">All (<span id="total-photos">4</span>)</a> 
                            </div>
                            <div class="float-right">
                                <form>
                                    <input type="search" id="image-search-input" name="" value="">
                                    <input type="submit" id="search-submit" class="button" value="Search Image">
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="all-posts-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">File</th>
                                <th scope="col">Author</th>
                                <th scope="col">Uploaded to</th>
                                <th scope="col"><i class="fas fa-comment-alt"></i></th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <img src="../images/gallery/1.jpg" alt="" class="img-fluid dashboard-img">
                                    <strong><a href="#">Photo name</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="trash">
                                            <a href="#">Trash</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Fahad</a></td>
                                <td><a href="#">folder name</a></td>
                                <td>2</td>
                                <td>2018/12/13</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <img src="../images/gallery/2.jpg" alt="" class="img-fluid dashboard-img">
                                    <strong><a href="#">Photo name</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="trash">
                                            <a href="#">Trash</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Tanvir</a></td>
                                <td><a href="#">folder name</a></td>
                                <td>4</td>
                                <td>2019/01/19</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <img src="../images/gallery/3.jpg" alt="" class="img-fluid dashboard-img">
                                    <strong><a href="#">Photo name</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="trash">
                                            <a href="#">Trash</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Nafi</a></td>
                                <td><a href="#">folder name</a></td>
                                <td>3</td>
                                <td>2019/02/20</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <img src="../images/gallery/4.jpg" alt="" class="img-fluid dashboard-img">
                                    <strong><a href="#">Photo name</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="trash">
                                            <a href="#">Trash</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Habib</a></td>
                                <td><a href="#">folder name</a></td>
                                <td>4</td>
                                <td>2018/12/13</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>