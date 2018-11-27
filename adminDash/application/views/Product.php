<?php include 'partials/Header.php'?>

<style>
input[type=submit] {
   
    color: white;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin: 8px 9px ;
    
}
    input[type=submit]:hover {
    background-color: #000000;
    }
input[type=reset] {
   
    color: white;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin: 8px 9px ;
    
}
input[type=reset]:hover {
        background-color: #000000;
    }
.col-submit{
    background-color: green;
    }
.col-cancel{
    background-color: #DC143C;
    }

    </style>
<div class="container">
    <h1>Product Details</h1>
   <!--?php if($this->session->flashdata('msg')) {
    echo  "<h3>".$this->session->flashdata('msg')."</h3>";
}
?-->
<hr>
    <?php echo $error;?> 
    <?php echo validation_errors(); ?>
    <?php echo form_open('Product/ProductDetails'); ?>
    <div class="form-group">
    <label>Product Name</label>
    <input type="text" class="form-control" name="Pname">
    <p class="help-block">Example: Flake Ice Machines.</p>
    </div>
    <!--div class="form-group">
        <label>Product Id</label>
        <input class="form-control" name="PId" placeholder="C02T">
    </div-->
    <div class="form-group">
        <label>Insert Image</label>
        <input type="file" name="pic1" accept="image/*">
        <!--input type="file" name="pic2" accept="image/*">
        <input type="file" name="pic3" accept="image/*">
        <input type="file" name="pic4" accept="image/*">
        <input type="file" name="pic5 " accept="image/*"-->
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea type="text" class="form-control" rows="3" name="description"></textarea>
    </div>
    <!--div class="form-group">
        <label>Available size</label>
        <label class="checkbox-inline">
        <input type="checkbox" name="L">L
        </label>
        <label class="checkbox-inline">
        <input type="checkbox" name="M">M
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" name="S">S
        </label>                          
    </div-->
      <!--div class="form-group">
          <label>Price : </label>
<select>
  <option value="price">Negotiable</option>
  
</select>
  
    </div--> 
    <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price">
    </div>
         <input class="col-cancel" type="reset" value="Cancel">
        <input class="col-submit" type="submit" value="Submit">
                                    
                                
   

 <?php echo form_close(); ?>


</div>
 <?php include 'partials/footer.php'?>   
