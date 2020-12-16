<?php require "include/top_header.php"; ?>
<?php require "include/header.php"; ?>

<div class="content-container">
    <?php require "include/navbar.php"; ?>
    <div class="container-fluid">


        <div class="row">
            <div class="col-xs-12">
                <span class="page-title">
                    <h4>Salle</h4>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="content-block">
                    <div class="block-title">Datatable</div>
                    <div class="block-content">
                        <table id="example" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                            </tbody>
                        </table>
                        <nav class="table-pagination">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
                                    </li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li><a href="#">2</a>
                                    </li>
                                    <li><a href="#">3</a>
                                    </li>
                                    <li><a href="#">4</a>
                                    </li>
                                    <li><a href="#">5</a>
                                    </li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="content-block">
            <div class="block-title">from</div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-block">

                        <form class="form-vertical">
                            <div class="block-content">
                            
                                <div class="form-group">
                                    <label for="exampleInputEmail1">title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">description</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">country</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="country">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">city</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter city">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">zip code</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter zip code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">capacity</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter capacity">
                                </div>



                            </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <br>
                    <div class="content-block">
                        <div class="form-group">

                            <div class="form-group">
                                <label for="exampleInputEmail1">capacity</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter capacity">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">category</label>
                                <select name="category" class="form-control">
                                    <option value="meeting">meeting</option>
                                    <option value="office">office</option>
                                    <option value="training">training</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">input photo 1200x675</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">PNG 1200x675.</p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">input photo 1200x675</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">PNG 1200x675.</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">input photo 1200x675</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">PNG 1200x675.</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">input photo 1200x675</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">PNG 1200x675.</p>
                            </div>
                        </div>
                    </div>

                    <div class="block-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Sign up</button>
                            <button type="submit" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

