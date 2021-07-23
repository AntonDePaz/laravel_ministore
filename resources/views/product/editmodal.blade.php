<div class="modal fade" id="editm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Product</h5>
      </div>
      <form method="POST" action="{{ route('product.update') }}"  id="edit_product_form">
        @csrf
                <input type="hidden" name="p_id">
             <div class="modal-body" style="background-color: lightblue;">
      

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control is-invalid" name="description" value="{{ old('description') }}">
                                <span class="text-danger error-text description_error" role="alert"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" >

                                <span class="text-danger error-text quantity_error" role="alert"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" >

                                <span class="text-danger error-text price_error" role="alert"></span>
                            </div>
                        </div>

                       

                      
                      
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary pull-left">Add Product</button>
      </div>
      </form> 
    </div>
  </div>
</div>