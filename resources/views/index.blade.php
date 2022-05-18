<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
        

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            img{
                height: 50px;
                width: 50px;
            }
        </style>
    </head>
    <body class="antialiased container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">
                Product Table
            </span>
            <span class="navbar-brand mb-0 h1">
            <button type="button" class="btn btn-primary btn-sm" id="modal" data-toggle="modal" data-target="#exampleModalCenter">
            Add Product
            </button>
            </span>
        </nav><br>
        <!-- Button trigger modal -->

        <table class="table table-striped productTable" id="example">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Desccription</th>
                <th scope="col">Image</th>
                <th scope="col">Actin</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1?>
                @foreach($products as $product)
                <tr>
                    <th>{{$i++}}</th>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_desccription}}</td>
                    <td><img src="{{asset($product->product_image)}}" alt="{{$product->product_name}}"></td>
                    <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary" onclick="editProduct()" id="{{$product->id}}">Edit</button>
                            <button type="button" class="btn btn-secondary" onclick="deleteProduct()" id="{{$product->id}}">Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Create Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" class="btn-submit" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <input type="hidden" id="id" name="id">
                        <div class="modal-body">                        
                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product Name">
                            </div>
                            <div class="form-group">
                                <label for="product_price">Product Price</label>
                                <input type="number" class="form-control" name="product_price" id="product_price" placeholder="Product Price">
                            </div>
                            <div class="form-group">
                                <label for="product_image">Product Image</label>
                                <input type="file" name="product_image" class="form-control" id="product_image">
                                <img src="" class="imgshow" alt="">
                            </div>
                            <div class="form-group">
                                <label for="product_desccription">Product Desccription</label>
                                <textarea name="product_desccription" class="form-control" id="product_desccription" rows="3" placeholder="Product Desccription"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<script>
    
    $(document).ready(function () {
        fetchRecords();
        $('.imgshow').hide();
        $('#example').DataTable({
            pagingType: 'full_numbers',
        });
    });
</script>
<script>
    function fetchRecords(){
        $.ajax({
            url: 'products',
            type: 'get',
            dataType: 'json',
            success: function(response){
            var len = 0;
            $('.productTable tbody').empty(); // Empty <tbody>
            if(response['products'] != null){
                len = response['products'].length;
            }

            if(len > 0){
                for(var i=0; i<len; i++){
                    var id = response['products'][i].id;
                    var product_name = response['products'][i].product_name;
                    var product_price = response['products'][i].product_price;
                    var product_desccription = response['products'][i].product_desccription;
                    var product_image = response['products'][i].product_image;
                    
                    var button = '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example"><button type="button" class="btn btn-secondary" onclick="editProduct('+id+')">Edit</button><button type="button" class="btn btn-secondary" onclick="deleteProduct('+id+')">Delete</button></div>';
                    var img = "."+id+"";
                    var tr_str = "<tr>" +
                    "<td>" + (i+1) + "</td>" +
                    "<td>" + product_name + "</td>" +
                    "<td>" + product_price + "</td>" +
                    "<td>" + product_desccription + "</td>" +
                    "<td><img class="+id+"></td>" +
                    "<td>" + button + "</td>" +
                    "</tr>";

                    $(".productTable tbody").append(tr_str);
                    $(img).attr('src', product_image);
                }
            }else{
                var tr_str = "<tr>" +
                    "<td colspan='4'>No record found.</td>" +
                "</tr>";

                $(".productTable tbody").append(tr_str);
            }

            }
        });
    }   

</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").on('submit',function(event){
        event.preventDefault();
        $.ajax({
            url:'product/store',
            method:'POST',
            data:new FormData(this),
            contentType: false,
            processData: false,
            success:function(response){
                if(response.success){
                    alert(response.message)
                    $('.imgshow').hide();
                    $('#exampleModalLongTitle').text('Create Product');
                    $('.submit').text('Submit');
                    fetchRecords();
                    $("[data-dismiss=modal]").trigger({ type: "click" });
                    $('#product_name').val('');
                    $('#product_price').val('');
                    $('#product_desccription').val('');
                    $('#product_image').val('');
                }else{
                    alert("Error")
                }
            },
            error:function(error){
                console.log(error)
            }
        });
    });
</script>
<script>
    function editProduct(id) {
        $.ajax({
            url: 'edit/product/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                $('#id').val(response['products'].id);
                $('#product_name').val(response['products'].product_name);
                $('#product_price').val(response['products'].product_price);
                $('#product_desccription').val(response['products'].product_desccription);
                $('.imgshow').attr('src', response['products'].product_image);
                $('.imgshow').show();
                $('#exampleModalLongTitle').text('Edit Product');
                $('.submit').text('Update');
                document.getElementById("modal").click();
            }
        });
    }
</script>
<script>
    function deleteProduct(id) {
        var result = confirm("Want to delete?");
            if(result){
            $.ajax({
                url: 'delete/product/'+id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    fetchRecords();
                }
            });
        }
    }
</script>
    </body>
</html>
