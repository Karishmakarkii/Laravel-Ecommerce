@dd($categories)
<div class="container">
<form action="/">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product name" name="product_name"  value="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Enter product description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price" value="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Product image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_img">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
