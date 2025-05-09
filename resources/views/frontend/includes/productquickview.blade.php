<!-- product quick view modal - start
            ================================================== -->
            <div class="modal fade" id="quickview_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Product Quick View</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product_details">
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            <div class="product_details_image p-0">
                                                {{-- <img src="{{ asset('frontend') }}/assets/images/shop/product_img_12.png" alt> --}}
                                                <img id="modal-product-image" src="" alt="Product Image">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                            <div class="product_details_content">
                                                <h2 class="item_title" id="modal-product-name"></h2>
                                                <p id="modal-product-short-description">
                                                </p>
                                                <div class="item_review">
                                                    <ul class="rating_star ul_li">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="review_value">3 Rating(s)</span>
                                                </div>
                                                <div class="item_price">
                                                    <span id="modal-product-discount"></span>
                                                    <del id="modal-product-price"></del>
                                                </div>
                                                <hr>
                                                
                                                
                                                <div class="quantity_wrap">
                                                    {{-- <form action="#">
                                                        <div class="quantity_input">
                                                            <button type="button" class="input_number_decrement">
                                                                <i class="fal fa-minus"></i>
                                                            </button>
                                                            <input class="input_number" type="text" value="1">
                                                            <button type="button" class="input_number_increment">
                                                                <i class="fal fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </form> --}}
                                                    <div class="total_price" >
                                                        Total: <span id="modal-show-product-price"></span>
                                                    </div>
                                                </div>
                                                
                                                <ul class="default_btns_group ul_li">
                                                    {{-- <li><a class="addtocart_btn" href="#!">Add To Cart</a></li>
                                                    <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                    <li><a href="#!"><i class="fas fa-heart"></i></a></li> --}}
                                                </ul>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product quick view modal - end
            ================================================== -->
