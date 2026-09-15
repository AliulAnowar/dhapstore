@extends('layout.reglayout')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .form-control:focus {
            box-shadow: none;
            border-color: transparent;
            border-bottom: 2px solid #7B0405;
            outline: none;
        }

        .form-group label {
            font-weight: bold;
        }

        .main {
            background-color: #d1d1d1;
        }

        .btn-maroon {
            /* Normal State: Gradient from maroon to the same maroon color */
            background: linear-gradient(to right, #7B0405, #7B0405);
            color: #fff !important;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-maroon:hover {
            /* Hover State: Slightly different second stop for a left-to-right transition */
            background: linear-gradient(to right, #9B0506, #7B0405);
        }

        .custom-file-maroon input[type="file"] {
        /* Hide the text color if desired so only the custom button shows */
        color: #555;
        cursor: pointer;
    }

    /* WebKit browsers (older Safari, older Chrome) */
    .custom-file-maroon input[type="file"]::-webkit-file-upload-button {
        background: linear-gradient(to right, #7B0405, #7B0405);
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        transition: background 0.3s ease;
        cursor: pointer;
    }
    .custom-file-maroon input[type="file"]::-webkit-file-upload-button:hover {
        background: linear-gradient(to right, #9B0506, #7B0405);
    }

    /* Modern browsers (Firefox, new Chrome, Edge, Safari 14+) */
    .custom-file-maroon input[type="file"]::file-selector-button {
        background: linear-gradient(to right, #7B0405, #7B0405);
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        transition: background 0.3s ease;
        cursor: pointer;
    }
    .custom-file-maroon input[type="file"]::file-selector-button:hover {
        background: linear-gradient(to right, #9B0506, #7B0405);
    }

    /* #districtSelect,
#areaSelect {
  background-color: #7B0405; /* The closed select's background */
  /* color: #fff;               The closed select's text color */


#districtSelect option,
#areaSelect option {
  background-color: #7B0405; /* The option list items when opened */
  color: #fff;               /* White text */
}
.form-control,
.form-control-file,
select.form-control,
textarea.form-control {
  color: #000 !important;  /* Force black text */
}

/* Also ensure placeholders are black if desired */
.form-control::placeholder {
  color: #000 !important; 
}
.form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #000 !important;
}
.form-control::-ms-input-placeholder { /* Microsoft Edge */
  color: #000 !important;
}
    </style>
    <main class="main">
        <!-- Page Header -->
        {{-- <div class="page-header">
        <div class="container d-flex flex-column align-items-center">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/shop') }}">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </div>
            </nav>
            <h1>My Account</h1>
        </div>
    </div> --}}

        <!-- Registration Section -->
        <div class="d-flex align-items-center justify-content-center" style="min-height: 80vh; padding-top: 20px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="card shadow p-4">
                            <div class="card-body">
                                <div class="heading mb-4 text-center">
                                    <h2 class="title">Register</h2>
                                </div>

                                <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Two Column Layout -->
                                    <div class="row">
                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="register-email">
                                                    Email Address <span class="required text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="register-email"
                                                    name="email" placeholder="Enter your email" required />
                                            </div>
                                        </div>

                                        <!-- Password -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="register-password">
                                                    Password <span class="required text-danger">*</span>
                                                </label>
                                                <input type="password" class="form-control" id="register-password"
                                                    name="password" placeholder="Enter your password" required />
                                            </div>
                                        </div>

                                        <!-- NID Number -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nid-no">
                                                    NID Number <span class="required text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="nid-no" name="nid_no"
                                                    placeholder="Enter your NID number" required />
                                            </div>
                                        </div>

                                        <!-- NID Picture (Front) -->
                                        <div class="col-md-6">
                                            <div class="form-group custom-file-maroon">
                                                <label for="nid-pic-front">
                                                    NID Picture (Front Side) <span class="required text-danger">*</span>
                                                </label>
                                                <input 
                                                    type="file" 
                                                    class="form-control-file" 
                                                    id="nid-pic-front"
                                                    name="nid_pic_front" 
                                                    accept="image/*" 
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <!-- TIN Number -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tin-no">
                                                    TIN Number <span class="required text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="tin-no" name="tin_no"
                                                    placeholder="Enter your TIN number" />
                                            </div>
                                        </div>

                                        <!-- NID Picture (Back) -->
                                        <div class="col-md-6">
                                            <div class="form-group custom-file-maroon">
                                                <label for="nid-pic-back">
                                                    NID Picture (Back Side) <span class="required text-danger">*</span>
                                                </label>
                                                <input 
                                                    type="file" 
                                                    class="form-control-file"
                                                    id="nid-pic-back"
                                                    name="nid_pic_back"
                                                    accept="image/*"
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <!-- Personal Address -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">
                                                    Address <span class="required text-danger">*</span>
                                                </label>
                                                <textarea class="form-control form-control-sm" id="address" name="address" rows="1"
                                                    placeholder="Enter your address" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Company Address -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company-address">
                                                    Company Address <span class="required text-danger">*</span>
                                                </label>
                                                <textarea class="form-control form-control-sm" id="company-address" name="company_address" rows="1"
                                                    placeholder="Enter your company address" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Company Name -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company-name">
                                                    Company Name <span class="required text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="company-name"
                                                    name="company_name" placeholder="Enter your company name" required />
                                            </div>
                                        </div>
                                        <!-- Mobile Number -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile-no">
                                                    Mobile Number <span class="required text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="mobile-no" name="mobile_no"
                                                    placeholder="Enter your mobile number" required />
                                            </div>
                                        </div>

                                        

                                        

                                        

                                        <!-- Company Location -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="districtSelect">District <span
                                                        class="required text-danger">*</span></label>
                                                <select id="districtSelect" class="form-control mb-2" name="district"
                                                    required>
                                                    <option value="">-- Select District --</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="areaSelect">Area <span
                                                        class="required text-danger">*</span></label>
                                                <select id="areaSelect" class="form-control mb-2" name="area"
                                                    required>
                                                    <option value="">-- Select Area --</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" 
                                    class="btn btn-block btn-lg btn-maroon mt-3">REGISTER</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // The path to your JSON file in public/assets/js/
            const jsonUrl = "{{ asset('assets/js/bd_districts_areas.json') }}";

            const districtSelect = document.getElementById("districtSelect");
            const areaSelect = document.getElementById("areaSelect");

            // Fetch the JSON file
            fetch(jsonUrl)
                .then(response => response.json())
                .then(data => {
                    // 'data' is an array of objects, e.g.:
                    // [
                    //    { "district": "Dhaka", "areas": ["Mohammadpur ...", "Dhanmondi ...", ...] },
                    //    { "district": "Narayanganj", "areas": [...] },
                    //    ...
                    // ]

                    // Populate the District dropdown
                    data.forEach(locationObj => {
                        const option = document.createElement("option");
                        option.value = locationObj.district;
                        option.textContent = locationObj.district;
                        districtSelect.appendChild(option);
                    });

                    // Listen for changes on District dropdown
                    districtSelect.addEventListener("change", function() {
                        // Clear the Areas dropdown
                        areaSelect.innerHTML = "<option value=''>-- Select Area --</option>";

                        // Find the selected District in 'data'
                        const selectedDistrict = districtSelect.value;
                        const found = data.find(obj => obj.district === selectedDistrict);

                        if (found && found.areas) {
                            // Populate Areas dropdown with the 'areas' array
                            found.areas.forEach(areaName => {
                                const areaOption = document.createElement("option");
                                areaOption.value = areaName;
                                areaOption.textContent = areaName;
                                areaSelect.appendChild(areaOption);
                            });
                        }
                    });
                })
                .catch(error => console.error("Error loading JSON:", error));
        });
    </script>
@endsection
