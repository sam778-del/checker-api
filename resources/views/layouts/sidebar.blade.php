<div class="sidebar p-2 py-md-3">
    <div class="container-fluid">
       <!-- sidebar: title-->
       <div class="title-text d-flex align-items-center mb-4 mt-1">
         <a hheight="40" href="/" style="font-size: 20px;font-weight: bold;">
            <span class="fill-primary">C</span>
            <span class="fill-secondary">H</span>
            <span class="fill-primary">E</span>
            <span class="fill-primary">C</span>
            <span class="fill-primary">K</span>
            <span class="fill-primary">E</span>
            <span class="fill-primary">R</span>
         </a>
       </div>
       <!-- sidebar: Create new -->

       <!-- sidebar: menu list -->
       <div class="main-menu flex-grow-1">
          <ul class="menu-list">
             <li>
                <a class="m-link {{ Request::segment(1) == "home" ? 'active' : '' }}" href="{{ url('/') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path class="fill-secondary" d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                    </svg>
                   <span class="ms-2">{{ __('Dashboard') }}</span>
                </a>
             </li>

             <li>
               <a class="m-link {{ Request::segment(1) == "step" ? 'active' : '' }}"href="{{ route('step.index') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                     <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                     <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  </svg>
                  <span class="ms-2">{{ __('Steps') }}</span>
               </a>
            </li>

             <li>
               <a class="m-link" href="{{ url('/') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                     <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                     <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  </svg>
                  <span class="ms-2">{{ __('Response') }}</span>
               </a>
            </li>
          </ul>
       </div>
    </div>
 </div>
