{{--add category--}}
<div class="modal fade" id="addCtgr" tabindex="-1" aria-labelledby="addCtgrlLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCtgrlLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name List</label>
                        <input type="text" class="form-control" id="ip_ctgrAdd">
                        <small id="ip_ctgrAddF" class="form-text text-danger d-none">Existing category. Please check
                            again.</small>
                        <small id="ip_ctgrAddT" class="form-text text-success d-none">More success.</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="md_BtnAddCtgr">ADD</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addCtgrBlog" tabindex="-1" aria-labelledby="addCtgrBloglLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCtgrBloglLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="ip_ctgrBlogAdd">Name List</label>
                        <input type="text" class="form-control" id="ip_ctgrBlogAdd">
                        <small id="ip_ctgrBlogAddF" class="form-text text-danger d-none">Existing category. Please check
                            again.</small>
                        <small id="ip_ctgrBlogAddT" class="form-text text-success d-none">More success.</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnAddCtgrBlog">ADD</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal cart-->
<div class="modal fade" id="modalCart" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="modalCartLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="modalCartLabel">Carts Detail <span
                        id="modalCartTitle"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-danger">L??u ??: C??c h??nh ?????ng s??? ???????c l??u l???i ngay l???p t???c.</h5>
                <div id="modalCartBody">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    $btnAddCtgr = $("#md_BtnAddCtgr");
    $btnAddCtgrBlog = $("#md_BtnAddCtgrblog");
    $btnAddCtgr.click(() => {
        $name = $("#ip_ctgrAdd").val();
        $.get("/product/category/add",
            {'name': $name},
            (data) => {

                if (data) {
                    $("#ip_ctgrAddT").removeClass("d-none");
                    $alert.addClass(["show", "alert-success"]);
                    $alert.text("Add " + $name);
                    setTimeout(() => {
                        $alert.removeClass(["show", "alert-success"]);
                        $alert.text("");
                    }, 2000);
                    setTimeout(() => {
                        $("#ip_ctgrAddT").addClass("d-none");
                    }, 2000);
                    $.get("/product/category", (data) => {
                        $cnt_admin.html(data);
                    })
                } else {
                    $("#ip_ctgrAddF").removeClass("d-none");
                    $("#ip_ctgrAdd").addClass("border-danger");
                    setTimeout(() => {
                        $("#ip_ctgrAddF").addClass("d-none");
                        $("#ip_ctgrAdd").removeClass("border-danger");
                    }, 2000);
                }
            });
    });

    $('#btnAddCtgrBlog').click(()=>{
        $name = $("#ip_ctgrBlogAdd").val();
        $.get("/tin-tuc/category/add",
            {'name': $name},
            (data) => {

                if (data) {
                    $("#ip_ctgrBlogAddT").removeClass("d-none");
                    $alert.addClass(["show", "alert-success"]);
                    $alert.text("Add " + $name);
                    setTimeout(() => {
                        $alert.removeClass(["show", "alert-success"]);
                        $alert.text("");
                    }, 2000);
                    setTimeout(() => {
                        $("#ip_ctgrBlogAddT").addClass("d-none");
                    }, 2000);
                    $.get("/tin-tuc/category", (data) => {
                        $cnt_admin.html(data);
                    })
                } else {
                    $("#ip_ctgrBlogAddF").removeClass("d-none");
                    $("#ip_ctgrBlogAdd").addClass("border-danger");
                    setTimeout(() => {
                        $("#ip_ctgrBlogAddF").addClass("d-none");
                        $("#ip_ctgrBlogAdd").removeClass("border-danger");
                    }, 2000);
                }
            });
    })


</script>
