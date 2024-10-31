<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="col-md-6">
                            Add New Product
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Products</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <div class="col-md-4 control-label">Product Name</div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Product Name" class="form-control input md">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">Product Slug</div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Product Slug" class="form-control input md">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">Short Description </div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Product Description" class="form-control input md">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label"> Description</div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Description" class="form-control input md">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label"> Regular Price</div>
                            <div class="col-md-4">
                                <input type="text" placeholder="Description" class="form-control input md">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">  SKU</div>
                            <div class="col-md-4">
                                <input type="text" placeholder="SKU" class="form-control input md">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">  Stock</div>
                            <div class="col-md-4">
                                <select class="form-control">Instock</select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
