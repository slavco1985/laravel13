<x-home-layout>
<section class="nav-container user-page-nav container-fluid">
  <div class="container">
    <div class="row">
      <ul class="path">
        <li>Home  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10.061 19.061 17.121 12l-7.06-7.061-2.122 2.122L12.879 12l-4.94 4.939z"></path></svg></li>
        <li>My Account  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10.061 19.061 17.121 12l-7.06-7.061-2.122 2.122L12.879 12l-4.94 4.939z"></path></svg></li>
        <li> Dashboard</li>
      </ul>

    </div>
    
  </div>
</section>
    <div class="container-fluid user-container">
       <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <x-user.navigation />
                </div>
                <div class="col-md-9">
                <div class="user-info">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="user-widg">
                                <div class="icon">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                                <div class="detail">
                                <h6>12,453</h6>
                                <p>Total Active Listing</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="user-widg">
                                <div class="icon">
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <div class="detail">
                                <h6>8,453</h6>
                                <p>Total Reviews</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="user-widg">
                                <div class="icon">
                                    <i class="bi bi-chat-left-text"></i>
                                </div>
                                <div class="detail">
                                <h6>153</h6>
                                <p>New Messages</p>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                   
                </div>
                <div class="latest-reviews business-listing">
                    <div class="row shadow-sm list-row border rounded">
                        <div class="col-lg-4 pe-0 img-col">
                            <img class="rounded" src="{{ asset('assets/images/listing/l-7.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-8 detail-col">
                            <div class="bofy-col">
                                <h2 class="text-truncate">South Indian Restuarent</h2>
                                <p class="text-truncate">We provide Quality South Indian Foods. Visit our Restuarent with your Family to get an awesome experiance</p>
                                <ul>
                                    <li><i class="bi bi-telephone"></i> +61-8281-153</li>
                                    <li><i class="bi bi-envelope"></i> kalaiunavagam@gmail.com</li>

                                </ul>
                                <ul>
                                    <li> <i class="bi bi-map"></i> New York</li>
                                    <li><i class="bi bi-geo-alt"></i>  Mig-213 Modern Colorny, NY 10012</li>
                                </ul>
                            </div>
                        
                            <div class="footcover pe-0">
                                <ul>
                                    <li class="rev"> 
                                        <i class="bi act bi-star-fill"></i>
                                        <i class="bi act bi-star-fill"></i>
                                        <i class="bi act bi-star-fill"></i>
                                        <i class="bi act bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <small>4.5  (12 Reviews)</small>
                                    </li>
                                    <li class="actionlist">
                                        <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i> Danger</button>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row shadow-sm list-row border rounded">
                        <div class="col-lg-4 pe-0 img-col">
                            <img class="rounded" src="{{ asset('assets/images/listing/l-7.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-8 detail-col">
                            <div class="bofy-col">
                                <h2 class="text-truncate">South Indian Restuarent</h2>
                                <p class="text-truncate">We provide Quality South Indian Foods. Visit our Restuarent with your Family to get an awesome experiance</p>
                                <ul>
                                    <li><i class="bi bi-telephone"></i> +61-8281-153</li>
                                    <li><i class="bi bi-envelope"></i> kalaiunavagam@gmail.com</li>

                                </ul>
                                <ul>
                                    <li> <i class="bi bi-map"></i> New York</li>
                                    <li><i class="bi bi-geo-alt"></i>  Mig-213 Modern Colorny, NY 10012</li>
                                </ul>
                            </div>
                        
                            <div class="footcover pe-0">
                                <ul>
                                    <li class="rev"> 
                                        <i class="bi act bi-star-fill"></i>
                                        <i class="bi act bi-star-fill"></i>
                                        <i class="bi act bi-star-fill"></i>
                                        <i class="bi act bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <small>4.5  (12 Reviews)</small>
                                    </li>
                                    <li class="actionlist">
                                        <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i> Danger</button>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</x-home-layout>