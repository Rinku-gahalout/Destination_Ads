@extends('wl-admin.layouts.app')
@section('content')

    
<div class="container py-4">
@include('wl-admin.layouts.sessionmessage')
<div class="row">
   <div class="col-12">
      <div class="card shadow-lg rounded-lg border-0">
         <div class="card-body bg-primary text-white text-center rounded-top">
            <h4 class="font-weight-bold text-uppercase">Add Blog</h4>
         </div>
      </div>
      <div class="card shadow-lg border-0 mt-3">
         <div class="card-body">
            <form class="p-4" action="{{ route('admin.storeblog')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="redirect_to" value="{{ request('redirect') }}">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Language<span class="text-danger">*</span></label>
                        <select name="language" class="form-control custom-select" id="languageSelect">
                            <option value="EN" {{ old('language') == 'EN' ? 'selected' : '' }}>EN</option>
                            {{-- <option value="ES" {{ old('language') == 'ES' ? 'selected' : '' }}>ES</option> --}}
                        </select>
                        @error('language')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Category<span class="text-danger">*</span></label>
                        <select name="category" class="form-control custom-select" id="categorySelect">
                        <!-- Options will be populated dynamically -->
                        </select>
                        @error('category')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Meta Title*</label>
                        <input type="text" name="meta_title" class="form-control fancy-input" placeholder="Enter Meta Title">
                        @error('meta_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="fancy-label">meta Description*</label>
                        <textarea name="meta_description" class="form-control fancy-textarea" rows="2"></textarea>
                        @error('meta_description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror    
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Meta Keywords*</label>
                        <textarea name="meta_keywords" class="form-control fancy-textarea" rows="2"></textarea>
                        @error('meta_keywords')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror 
                    </div>
                    <div class="col-md-6">
                        <label class="fancy-label">Title Tag*</label>
                        <input type="text" name="title_tag" class="form-control fancy-input">
                        @error('title_tag')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Blog URL*</label>
                        <input type="text" name="blog_url" class="form-control fancy-input">
                        @error('blog_url')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror 
                    </div>
                    <div class="col-md-6">
                        <label class="fancy-label">Main headline</label>
                        <input type="text" name="main_headline" class="form-control fancy-input" placeholder="Enter Meta Title">
                        @error('main_headline')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="fancy-label">Blog Description*</label>
                        <textarea id="summernote" name="blog_description" class="form-control"></textarea>
                        @error('blog_description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Tag*</label>
                        <input type="text" name="tag" class="form-control fancy-input">
                        @error('tag')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="fancy-label">Image</label>
                        <input type="file" name="image" class="form-control fancy-file-input">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Alt Tag*</label>
                        <input type="text" name="alt_tag" class="form-control fancy-input">
                        @error('alt_tag')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>  
            

                <div id="faq-section">
                    <div class="row faq-item">
                        <div class="col-md-5">
                            <label class="fancy-label">FAQ Question</label>
                            <input type="text" name="question[]" class="form-control fancy-input" placeholder="FAQ Question">
                        </div>
                        <div class="col-md-5">
                            <label class="fancy-label">FAQ Answer</label>
                            <textarea name="answer[]" class="form-control fancy-textarea" rows="2" placeholder="FAQ Answer"></textarea>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-danger remove-faq">Remove</button>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary mt-2" onclick="addFaq()">Add More FAQ</button>

                <div class="row text-center">
                    <div class="col-12">
                        <button type="submit" class="btn fancy-btn">Submit</button>
                    </div>
                </div>
            </form>
         </div>
      </div>
   </div>
</div>

<style>
   body {
   font-family: 'Poppins', sans-serif;
   background-color: #f1f1f1;
   }
   .fancy-heading {
   font-size: 24px;
   font-weight: 700;
   color: #fff;
   background: linear-gradient(45deg, #007bff, #0056b3);
   padding: 15px;
   border-radius: 8px;
   }
   .fancy-label {
   font-weight: 600;
   margin-bottom: 5px;
   }
   .fancy-input, .fancy-textarea, .fancy-file-input {
   border-radius: 8px;
   padding: 10px;
   }
   .fancy-btn {
   background: linear-gradient(45deg, #007bff, #0056b3);
   color: white;
   padding: 12px 30px;
   border-radius: 50px;
   }
</style>

<script>
function addFaq() {
    const faqSection = document.getElementById('faq-section');
    const faqItem = document.createElement('div');
    faqItem.classList.add('row', 'faq-item', 'mt-2');

    faqItem.innerHTML = `
        <div class="col-md-5">
            <input type="text" name="question[]" class="form-control fancy-input" placeholder="FAQ Question">
        </div>
        <div class="col-md-5">
            <textarea name="answer[]" class="form-control fancy-textarea" rows="2" placeholder="FAQ Answer"></textarea>
        </div>
        <div class="col-md-2 d-flex align-items-end">
            <button type="button" class="btn btn-danger remove-faq">Remove</button>
        </div>
    `;
    faqSection.appendChild(faqItem);
}

// Remove FAQ dynamically
document.addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('remove-faq')) {
        e.target.closest('.faq-item').remove();
    }
});
</script>

<script>
   const categoryData = {
     en: [
       { value: "blog", text: "Blog" },
       { value: "cancellation", text: "Cancellation Policy" },
       { value: "flight-change", text: "Change-flight Policy" },
       { value: "pet-policy", text: "Pet Policy" },
       { value: "refund-policy", text: "Refund Policy" },
       { value: "re-booking", text: "Re Booking" },
       { value: "new-booking", text: "New Booking" },
       { value: "seat-assignment", text: "Seat Assignment" },
       { value: "baggage-policy", text: "Baggage Policy" },
       { value: "infant-policy", text: "Infant Policy" },
       { value: "advance-purchase", text: "Advance Purchase Policy" },
       { value: "ticket-expiration", text: "Ticket Expiration Policy" },
     ],
     es: [
       { value: "articulos", text: "Articulos" },
       { value: "espanol", text: "Espanol" },
     ],
   };

   document.getElementById('languageSelect').addEventListener('change', function () {
     const selectedLanguage = this.value.toLowerCase();
     const categorySelect = document.getElementById('categorySelect');

     // 🔒 Prevent overwriting if category should be independent
     const shouldUpdateCategory = false; // 👈 Change this flag as needed

     if (shouldUpdateCategory && categoryData[selectedLanguage]) {
       // Clear and update only if allowed
       categorySelect.innerHTML = "";

       categoryData[selectedLanguage].forEach(option => {
         const newOption = document.createElement('option');
         newOption.value = option.value;
         newOption.textContent = option.text;
         categorySelect.appendChild(newOption);
       });
     }
     // else do nothing – category dropdown remains unchanged
   });
</script>

<!-- jQuery (required by Summernote) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            height: 300,             // Set editor height
            placeholder: 'Write your blog content here...',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['table', ['table']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>

<script>
    const categoryOptions = {
        EN: [
            { value: "blog", text: "Blog" },
            // { value: "cancellation", text: "Cancellation" },
            // { value: "flight-change", text: "Flight-Change" }
        ],
        // ES: [
        //     { value: "articulos", text: "Articulos" },
        //     { value: "espanol", text: "Espanol" }
        // ]
    };

    const languageSelect = document.getElementById('languageSelect');
    const categorySelect = document.getElementById('categorySelect');

    function populateCategories(language, selectedValue = null) {
        categorySelect.innerHTML = ''; // Clear existing options

        if (categoryOptions[language]) {
            categoryOptions[language].forEach(opt => {
                const option = document.createElement('option');
                option.value = opt.value;
                option.textContent = opt.text;

                if (selectedValue && selectedValue === opt.value) {
                    option.selected = true;
                }

                categorySelect.appendChild(option);
            });
        }
    }

    // Run on page load (to keep old selected values)
    document.addEventListener('DOMContentLoaded', function () {
        const selectedLanguage = languageSelect.value;
        const selectedCategory = "{{ old('category', request()->category) }}";
        populateCategories(selectedLanguage, selectedCategory);
    });

    // Update on language change
    languageSelect.addEventListener('change', function () {
        populateCategories(this.value);
    });
</script>

@endsection