<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Events</h2>
                        <a href="#" class="btn btn-outline-dark" style="padding: 2px 10px;">Add New</a>
                        
                        <div class="posts-info">
                            <div class="float-left">
                                <a href="#">All (<span id="total-events">4</span>)</a> 
                            </div>
                            
                        </div>
                    </div>
                    <table class="all-posts-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col"><i class="fas fa-comment-alt"></i></th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#">Event 1</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="editinline">
                                            <a href="#">Quick Edit</a>
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
                                <td><a href="#">4</a></td>
                                <td>2018/12/13</td>
                                <td>2018/12/13</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#">Event 2</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="editinline">
                                            <a href="#">Quick Edit</a>
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
                                <td><a href="#">3</a></td>
                                <td>2019/01/19</td>
                                <td>2019/01/19</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#">Event 3</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="editinline">
                                            <a href="#">Quick Edit</a>
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
                                <td><a href="#">9</a></td>
                                <td>2019/02/20</td>
                                <td>2019/02/20</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#">Event 4</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="editinline">
                                            <a href="#">Quick Edit</a>
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
                                <td><a href="#">4</a></td>
                                <td>2018/12/13</td>
                                <td>2018/12/13</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>