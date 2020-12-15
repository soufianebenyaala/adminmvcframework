<?php require "include/top_header.php"; ?>
<?php require "include/header.php"; ?>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php require "include/navbar.php"; ?>
    <div class="row">
        <div class="content-block">
            <div class="block-title">Add Room
            </div>

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
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter zip code">
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
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter capacity">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">capacity</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter capacity">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputFile">category</label>
                                <select name="category" class="form-control">
                                    <option value="meeting" >meeting</option>
                                    <option value="office" >office</option>
                                    <option value="training" >training</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputFile">input photo 1200x675</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">input photo 1200x675</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">input photo 1200x675</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputFile">input photo 1200x675</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">input photo</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                </div>

                <div class="block-footer">
                    <div class="form-group" >
                        <button type="submit" class="btn btn-primary">Sign up</button>
                        <button type="submit" class="btn btn-default">Cancel</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>