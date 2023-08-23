@extends("layouts.default")

@section("pageTitle")
Product
@stop

@section("PageSpecificPropertiesInTheHead")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css/product.css') }}">
@stop

@section("content")

<div class="product-container">
			<div class="product">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="{{ $product->imgLink }}" />
						</div>
						<div class="swiper-slide">
							<img src="{{ URL::asset('assets/product/image_2.avif') }}" />
						</div>
						<div class="swiper-slide">
							<img src="{{ $product->imgLink }}" />
						</div>
						<div class="swiper-slide">
							<img src="{{ URL::asset('assets/product/image_2.avif') }}" />
						</div>
					</div>
					<div class="swiper-pagination"></div>

					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>

					<div class="swiper-scrollbar"></div>
				</div>
				<div class="wrapper">
					<div class="product__name" tabindex="0">{{ $product->name }}</div>
					<div class="product__category"><a href="#">{{ $product->species }}</a></div>
					<div class="product__price">
						<span class="product__price--actual" tabindex="0" data-value="{{ $product->price }}">
							€{{ $product->price }}
						</span>
						<span class="product__price--old" tabindex="0" data-value="12.99">
							€12.99
						</span>
					</div>
					<div class="product__separator"></div>
					<div class="product__size-option">
						<div class="size-button" tabindex="0" data-size="S">S</div>
						<div class="size-button" tabindex="0" data-size="M">M</div>
						<div class="size-button" tabindex="0" data-size="L">L</div>
					</div>
					<div class="product__description-title" tabindex="0">Description</div>
					<div class="product__description-text cut-text" tabindex="0">
						{{ $product->description }}
					</div>
				</div>
			</div>

			<div class="product__buttons">
				<button
					id="product-specifications"
					class="product-specifications product__button-clicked"
					tabindex="0">
					Specifications
				</button>
				<button id="product-care" class="product-care" tabindex="0">
					Care
				</button>
				<button id="product-reviews" class="product-reviews" tabindex="0">
					Reviews
				</button>
			</div>
			<div class="product__separator"></div>
			<div class="product__details active">
				<ul class="details">
					<li>
						<svg
							class="plant-diameter"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 140 140">
							<g>
								<g>
									<path
										d="M67.4,80.7c-0.2-6.6,0-13.4,0.4-20c-2.8-0.2-5.6-0.5-8.4-1.1c-1.3,2.1-2.9,4-4.5,5.8l-2.3-2.2c1.3-1.4,2.5-2.8,3.6-4.4 c-4.3-1.3-8-3.2-10.2-5.6c-4.9-5.3-5.2-13.2-0.9-18.9l0.1-0.1c2.2-2.5,5.6-3.7,8.9-3.2c3.8,0.8,7,3.4,8.6,7 c2.7,6.2,1.1,13.5-1.5,18.8c2.3,0.5,4.6,0.7,7,0.9v-0.5c0.3-7,1.8-14,4.4-20.5c3.7-8.2,9.6-13,16-13c8.5,0,14.4,6.2,14.4,15.2 c0,8.7-5.1,15.4-14.5,19.1c-5.5,2-11.4,3-17.3,2.9h-0.1c-0.4,6.6-0.6,13.2-0.4,19.8L67.4,80.7z M88.4,26.7c-7.5,0-11.9,8.5-13,11 C73,44,71.6,50.6,71.3,57.3v0.3c5.5,0.1,10.9-0.9,16-2.8c5.7-2.2,12.4-6.8,12.4-16.1C99.7,31.5,95.2,26.7,88.4,26.7z M47.6,36.2 c-3.3,4.5-3,10.7,0.8,14.8c1.9,2.1,5.3,3.8,9.5,5c2.5-4.7,4.2-11.3,1.8-16.8c-1.1-2.6-3.4-4.5-6.2-5.1 C51.3,33.7,49,34.5,47.6,36.2z"></path>
								</g>
								<g>
									<polygon
										points="87.3,118.7 50.3,118.7 45.7,76.1 48.9,75.7 53.2,115.5 84.5,115.5 89.3,75.7 92.4,76.1"></polygon>
								</g>
								<g>
									<path
										d="M83.6,82.2c-1.9,0-3.6-0.9-4.8-2.4c-0.9-1-1.4-1.4-2.5-1.4s-1.6,0.5-2.5,1.4c-1.9,2.6-5.7,3.2-8.3,1.3 c-0.5-0.4-0.9-0.8-1.3-1.3c-0.9-1-1.4-1.4-2.5-1.4s-1.6,0.5-2.5,1.4c-1.1,1.5-2.9,2.4-4.8,2.4c-1.9,0-3.7-0.9-4.8-2.4 c-0.9-1-1.4-1.4-2.5-1.4c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6c1.9,0,3.6,0.9,4.8,2.4c0.9,1,1.4,1.4,2.5,1.4 c1.1,0,1.6-0.5,2.5-1.4c2-2.6,5.8-3.2,8.4-1.2c0.4,0.3,0.8,0.7,1.2,1.2c0.9,1,1.4,1.4,2.5,1.4s1.6-0.5,2.5-1.4 c2-2.6,5.8-3.2,8.4-1.2c0.4,0.3,0.8,0.7,1.2,1.2c0.9,1,1.4,1.4,2.5,1.4s1.6-0.5,2.5-1.4c1.2-1.5,2.9-2.4,4.8-2.4 c0.9,0,1.6,0.7,1.6,1.6s-0.7,1.6-1.6,1.6c-1.1,0-1.6,0.5-2.5,1.4C87.2,81.2,85.5,82.1,83.6,82.2z"></path>
								</g>
							</g>
							<polygon
								points="40.8,110 40.8,106.4 96.1,106.4 96.1,110 98.1,110 98.1,100.8 96.1,100.8 96.1,104.4 40.8,104.4 40.8,100.8 38.8,100.8 38.8,110"></polygon>
							<path
								d="M98.6,110.5h-3v-3.7H41.3v3.7h-3v-10.3h3v3.7h54.3v-3.7h3V110.5z M96.6,109.5h1v-8.3h-1v3.7H40.3v-3.7h-1v8.3h1v-3.7h56.3 V109.5z"></path>
						</svg>
						<span tabindex="0">Diameter</span>
						<span tabindex="0">15cm</span>
					</li>
					<li>
						<svg
							class="w-16"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 140 140">
							<polygon
								points="98,25.9 101.7,25.9 101.7,116 98,116 98,118 107.3,118 107.3,116 103.7,116 103.7,25.9 107.3,25.9 107.3,23.9 98,23.9"></polygon>
							<path
								d="M107.9,118.6H97.4v-3.2h3.6v-89h-3.6v-3.2h10.5v3.2h-3.7v89h3.7L107.9,118.6z M98.6,117.4h8.1v-0.8h-3.7V25.3h3.7v-0.8h-8.1 v0.8h3.7v91.4h-3.7V117.4z"></path>
							<g>
								<g>
									<path
										d="M57.4,80.5c-0.1-6.7,0-13.4,0.4-20c-2.8-0.2-5.6-0.5-8.4-1.1c-1.3,2.1-2.9,4-4.6,5.8l-2.3-2.2c1.3-1.4,2.5-2.8,3.6-4.4 c-4.3-1.3-8-3.2-10.2-5.6c-4.9-5.3-5.3-13.3-0.9-19l0.1-0.1c2.2-2.5,5.6-3.7,8.9-3.2c3.8,0.8,7,3.4,8.6,7 c2.7,6.2,1.1,13.5-1.6,18.8c2.3,0.4,4.6,0.7,7,0.9c0-0.2,0-0.3,0-0.5c0.3-7.1,1.8-14,4.4-20.6c3.7-8.2,9.7-13,16-13 c8.5,0,14.5,6.3,14.5,15.2c0,8.7-5.2,15.5-14.5,19.1c-5.5,2-11.4,3.1-17.3,3H61c-0.4,6.6-0.6,13.3-0.4,19.9L57.4,80.5z M78.5,26.5 c-7.5,0-11.9,8.5-13.1,11.1c-2.5,6.2-3.8,12.8-4.1,19.5v0.3c5.5,0.1,10.9-0.9,16-2.8c5.7-2.2,12.5-6.8,12.5-16.2 C89.8,31.3,85.3,26.5,78.5,26.5z M37.5,36c-3.3,4.5-3,10.7,0.8,14.8c1.9,2.1,5.3,3.8,9.6,5c2.5-4.7,4.2-11.4,1.8-16.8 c-1.1-2.6-3.4-4.5-6.2-5.1C41.3,33.5,39,34.3,37.5,36L37.5,36z"></path>
								</g>
								<g>
									<polygon
										points="77.4,118.7 40.3,118.7 35.7,75.9 38.9,75.6 43.2,115.5 74.6,115.5 79.4,75.6 82.6,75.9"></polygon>
								</g>
								<g>
									<path
										d="M73.7,82.1c-1.9,0-3.7-1-4.8-2.5c-0.9-1-1.4-1.4-2.5-1.4s-1.6,0.5-2.5,1.4c-2,2.7-5.7,3.2-8.4,1.2 c-0.5-0.3-0.9-0.8-1.2-1.2c-0.9-1-1.4-1.4-2.5-1.4c-1.1,0-1.6,0.5-2.5,1.4c-1.1,1.5-2.9,2.4-4.8,2.5c-2.6,0-3.9-1.6-4.9-2.8 c-1-1.2-1.4-1.6-2.4-1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6c2.6,0,3.9,1.6,4.9,2.8c1,1.2,1.4,1.6,2.4,1.6 s1.6-0.5,2.5-1.4c1.1-1.5,2.9-2.4,4.8-2.5c1.9,0,3.7,0.9,4.8,2.4c0.9,1,1.4,1.4,2.5,1.4s1.6-0.5,2.5-1.4c2-2.7,5.7-3.2,8.4-1.2 c0.5,0.3,0.9,0.8,1.2,1.2c0.9,1,1.4,1.4,2.5,1.4c1.1,0,1.5-0.5,2.4-1.6s2.3-2.8,4.9-2.8c0.9,0,1.6,0.7,1.6,1.6 c0,0.9-0.7,1.6-1.6,1.6c-1,0-1.5,0.5-2.4,1.6S76.3,82.1,73.7,82.1z"></path>
								</g>
							</g>
						</svg>
						<span tabindex="0">Height</span>
						<span tabindex="0" aria-label="60cm">± 60cm</span>
					</li>
					<li>
						<svg
							class="w-16"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 140 140">
							<path
								d="M120.7,81.5h-0.2v-0.2c0-9.8-7.9-17.7-17.7-17.7c-3.6,0-7,1.1-10,3.1c-3.5-7.6-11.1-12.5-19.4-12.5c-1.6,0-3.2,0.2-4.8,0.5 c-1.1-2.2-2.5-4.3-4.1-6.1l9.8-9.8l-1-1.1l-1.1-1.1l-9.8,9.8c-4.6-4.2-10.6-6.7-16.8-7V25.8h-3v13.8c-6.2,0.3-12.2,2.8-16.8,7 L16,36.8L15,37.8l-1.1,1.1l9.7,9.7c-4.2,4.6-6.7,10.6-7,16.8H2.9v3h13.8c0.3,6.2,2.8,12.2,7,16.8L13.9,95l1.1,1.1l1.1,1.1l9.8-9.7 c1.5,1.4,3.2,2.5,4.9,3.5c-0.1,0.5-0.1,1.1-0.1,1.6c0,12.1,9.7,21.8,21.8,21.8c0,0,0,0,0,0h68.3c9.1,0,16.4-7.4,16.4-16.4 S129.8,81.6,120.7,81.5L120.7,81.5L120.7,81.5z M120.7,111.4H52.4c-10.4,0-18.8-8.4-18.8-18.8c0-0.1,0-0.2,0-0.3 c0-0.5,0-1.1,0.1-1.6c0.1-0.5,0.1-1,0.2-1.6c1.6-8.9,9.4-15.4,18.5-15.4l0,0c0.2,2,1.2,4,2.6,5.4l0,0c0.9,0.8,2.1,1.2,3.3,1.2 c0.9,0,1.7-0.3,2.4-0.8c0.7-0.6,1.1-1.5,1.2-2.4c0-1.5-0.5-2.9-1.6-4c-1.3-1.2-3-2-4.8-2.2c1.5-5.8,5.7-10.6,11.3-12.7 c0.5-0.2,1-0.3,1.4-0.5s1-0.2,1.5-0.3c8.5-1.7,16.9,2.7,20.4,10.6c-1.7,1.1-3,2.9-3.6,4.9l0,0c-0.4,1.9,0.2,4.3,2.3,5.2 c0.4,0.2,0.8,0.2,1.2,0.2c0.5,0,1-0.1,1.4-0.3c1.3-0.7,2.3-1.8,2.8-3.2c0.5-1.8,0.3-3.7-0.4-5.4c6.5-4.8,15.7-3.5,20.5,3.1 c1.9,2.5,2.9,5.6,2.9,8.8c0,0.1,0,0.2,0,0.4c-2.1,0.2-4,1.1-5.4,2.6c-1.2,1.5-1.8,3.9-0.4,5.7c0.6,0.7,1.5,1.1,2.4,1.2h0.2 c1.4,0,2.7-0.6,3.7-1.6c1.3-1.4,2-3.2,2.2-5h0.4c7.4,0,13.4,6,13.4,13.4C134.1,105.4,128.1,111.4,120.7,111.4 C120.7,111.4,120.7,111.4,120.7,111.4L120.7,111.4z M19.6,66.9c0-13.5,10.9-24.4,24.4-24.5c9.1,0,17.5,5,21.7,13.1 c-6.6,2.5-11.6,8.2-13.1,15.2c-10.2-0.1-19.1,7-21.4,16.9C24,83.3,19.6,75.4,19.6,66.9z M55.6,74.1c1,0.2,1.9,0.6,2.7,1.2 c0.4,0.5,0.7,1.1,0.7,1.7c0,0.2-0.1,0.2-0.1,0.2c-0.6,0.3-1.4,0.2-1.8-0.3C56.3,76.1,55.8,75.1,55.6,74.1z M91.6,74 c-0.2,0.6-0.6,1.1-1.2,1.4c-0.1,0-0.2,0.1-0.2,0.1c-0.5-0.4-0.8-1.1-0.6-1.8l0,0c0.3-1,0.9-1.9,1.7-2.5l0.1-0.1 c0,0.2,0.1,0.4,0.1,0.6C91.8,72.4,91.8,73.2,91.6,74z M117.2,84.8v0.1c-0.2,0.9-0.6,1.8-1.2,2.5c-0.5,0.4-1.1,0.7-1.7,0.7 c-0.2,0-0.2-0.1-0.2-0.1c-0.3-0.6-0.2-1.4,0.3-1.8C115.1,85.5,116.1,85,117.2,84.8L117.2,84.8z"></path>
						</svg>
						<span tabindex="0">Loves</span>
						<span tabindex="0">Sunny spots</span>
					</li>
				</ul>
			</div>
			<div class="product__reviews">
				<ul class="reviews-list">
					<li tabindex="0">
						<span class="review-author" tabindex="0">John Doe</span>
						<span class="review-datestamp" tabindex="0">- 17.08.2023</span>
						<p class="review-text" tabindex="0">Great product!</p>
						<div class="rating">
							<input type="radio" name="rating" value="5" id="5" />
							<label for="5">☆</label>
							<input type="radio" name="rating" value="4" id="4" />
							<label for="4">☆</label>
							<input type="radio" name="rating" value="3" id="3" />
							<label for="3">☆</label>
							<input type="radio" name="rating" value="2" id="2" />
							<label for="2">☆</label>
							<input type="radio" name="rating" value="1" id="1" />
							<label for="1">☆</label>
						</div>
					</li>
					<li tabindex="0">
						<span class="review-author" tabindex="0">Jane Smith</span>
						<span class="review-datestamp" tabindex="0" aria-label="17.08.2023">
							- 17.08.2023
						</span>
						<p class="review-text" tabindex="0">
							Good quality and fast shipping. Lorem ipsum dolor sit, amet
							consectetur adipisicing elit. Iure quae harum, maxime enim in quis
							quisquam fugit omnis at ut consequatur molestias voluptas dolorum
							aspernatur quas illum explicabo nemo debitis doloribus sunt alias
							aliquam quidem dignissimos. Consequatur autem rerum minus iste?
							Totam nemo ipsam quo voluptatibus maxime deleniti quis quidem.
						</p>
						<div class="rating">
							<input type="radio" name="rating" value="5" id="5" />
							<label for="5">☆</label>
							<input type="radio" name="rating" value="4" id="4" />
							<label for="4">☆</label>
							<input type="radio" name="rating" value="3" id="3" />
							<label for="3">☆</label>
							<input type="radio" name="rating" value="2" id="2" />
							<label for="2">☆</label>
							<input type="radio" name="rating" value="1" id="1" />
							<label for="1">☆</label>
						</div>
					</li>
				</ul>
			</div>
			<div class="product__care" tabindex="0">
				<ol class="product__care-items">
					<li>
						Give your Philodendron plenty of indirect, bright light. If grown
						under too dim conditions, they may become leggy and have smaller and
						yellow leaves.
					</li>
					<li>
						Avoid placing it in direct sunlight. It is possible that excessive
						sunlight can cause the leaves to burn, which can result in stress
						for the plant.
					</li>
					<li>
						Water your plant regularly, allowing the soil to dry out slightly
						between waterings. Check the soil moisture levels before watering to
						prevent root rot.
					</li>
					<li>
						Fertilise your Philodendron every other month during the growing
						season with a balanced liquid fertiliser to provide the necessary
						nutrients for growth.
					</li>
					<li>
						Make sure your Philodendron has drainage holes and well-draining
						soil. It helps to prevent root rot.
					</li>
				</ol>
			</div>
			<h2 class="products-related-title" tabindex="0">Recommended for you</h2>

			<div class="products-related">
				<div class="products-related__product">
					<a class="products-related__link" href="#">
						<img src="{{ URL::asset('assets/product/image_1.avif') }}" alt="Plant 1" />
					</a>
					<div class="products-related__caption">
						<a class="products-related__link" href="#">
							<span class="products__related-plantTitle">
								Thai Constellation
							</span>
						</a>
					</div>
					<div class="products-related__caption">
						<a class="products-related__link" href="#">
							<span class="products__related-plantFamily">Monstera</span>
						</a>
					</div>
					<span class="products__related-plantPrice">€10.99</span>
				</div>
				<div class="products-related__product">
					<a class="products-related__link" href="#">
						<img src="{{ URL::asset('assets/product/image_2.avif') }}" alt="Plant 1" />
					</a>
					<div class="products-related__caption">
						<a class="products-related__link" href="#">
							<span class="products__related-plantTitle">Plant 2</span>
						</a>
					</div>
					<div class="products-related__caption">
						<a class="products-related__link" href="#">
							<span class="products__related-plantFamily">Plant Family 2</span>
						</a>
					</div>
					<span class="products__related-plantPrice">€22.99</span>
				</div>
				<div class="products-related__product">
					<a class="products-related__link" href="#">
						<img src="{{ URL::asset('assets/product/image_1.avif') }}" alt="Plant 1" />
					</a>
					<div class="products-related__caption">
						<a class="products-related__link" href="#">
							<span class="products__related-plantTitle">Plant 3</span>
						</a>
					</div>
					<div class="products-related__caption">
						<a class="products-related__link" href="#">
							<span class="products__related-plantFamily">Plant Family 3</span>
						</a>
					</div>
					<span class="products__related-plantPrice">€33.99</span>
				</div>
			</div>
		</div>

		<div class="product__footer">
			<div class="product__footer-wrapper">
				<div class="product__footer-input-total">
					<div class="frame-container">
						<div class="button frame-container-column col-45">
							<button id="minus-btn">-</button>
						</div>
						<div class="number frame-container-column col-25">
							<input
								class="product_quantity"
								id="quantity"
								type="number"
								value="1"
								min="1"
								step="1"
								max="100"
								pattern="/^/d+$/"
								onKeyPress="if(this.value.length==3) return false;"
								required />
						</div>
						<div class="button frame-container-column col-45">
							<button id="plus-btn">+</button>
						</div>
					</div>
				</div>
				<a href="{{ route('add.to.cart', ['id' => $product->id, 'quantity' => 1]) }}" type="button" class="product__footer-add-to-cart add-to-cart-anchor">Add to cart</a>
			</div>
			<div class="product__footer-total" tabindex="0">Total: €{{ $product->price }}</div>
		</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/product.js') }}"></script>
@stop
