@extends('wl-admin.layouts.app')
@section('content')

    
<div class="container py-4">
@include('wl-admin.layouts.sessionmessage')
<div class="row">
   <div class="col-12">
      <div class="card shadow-lg rounded-lg border-0">
         <div class="card-body bg-primary text-white text-center rounded-top">
            <h4 class="font-weight-bold text-uppercase">Edit Blog</h4>
         </div>
      </div>
      <div class="card shadow-lg border-0 mt-3">
         <div class="card-body">
            <form class="p-4" action="{{ route('admin.updateblog', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="redirect" value="{{ request('redirect') }}">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Language<span class="text-danger">*</span></label>
                        <select name="language" class="form-control custom-select" id="languageSelect">
                            <option value="EN" {{ $blog->language == 'EN' ? 'selected' : '' }}>EN</option>
                            {{-- <option value="ES" {{ $blog->language == 'ES' ? 'selected' : '' }}>ES</option> --}}
                        </select>
                        @error('language')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Category<span class="text-danger">*</span></label>
                        <select name="category" class="form-control custom-select" id="categorySelect">
                            {{-- <option value="articulos" {{ $blog->category == 'articulos' ? 'selected' : '' }}>Articulos</option> --}}
                            <option value="blog" {{ $blog->category == 'blog' ? 'selected' : '' }}>Blog</option>
                            {{-- <option value="cancellation" {{ $blog->category == 'cancellation' ? 'selected' : '' }}>Cancellation</option>
                            <option value="espanol" {{ $blog->category == 'espanol' ? 'selected' : '' }}>Espanol</option>
                            <option value="flight-change" {{ $blog->category == 'flight-change' ? 'selected' : '' }}>Flight-Change</option> --}}
                        </select>
                        @error('category')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Meta Title*</label>
                        <input type="text" name="meta_title" class="form-control fancy-input" value="{{ old('meta_title', $blog->meta_title) }}">
                        @error('meta_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="fancy-label">meta Description*</label>
                        <textarea name="meta_description" class="form-control fancy-textarea" rows="2">{{ old('meta_description', $blog->meta_description) }}</textarea>
                        @error('meta_description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror    
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Meta Keywords*</label>
                        <textarea name="meta_keywords" class="form-control fancy-textarea" rows="2">{{ old('meta_keywords', $blog->meta_keywords) }}</textarea>
                        @error('meta_keywords')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror 
                    </div>
                    <div class="col-md-6">
                        <label class="fancy-label">Title Tag*</label>
                        <input type="text" name="title_tag" class="form-control fancy-input" value="{{ old('title_tag', $blog->title_tag) }}">
                        @error('title_tag')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Blog URL*</label>
                        <input type="text" name="blog_url" class="form-control fancy-input" value="{{ old('blog_url', $blog->blog_url) }}">
                        @error('blog_url')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror 
                    </div>
                    <div class="col-md-6">
                        <label class="fancy-label">Main headline</label>
                        <input type="text" name="main_headline" class="form-control fancy-input" value="{{ old('main_headline', $blog->main_headline) }}">
                        @error('main_headline')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="fancy-label">Blog Description*</label>
                        <textarea id="summernote" name="blog_description" class="form-control">{!! old('blog_description', strip_tags(html_entity_decode($blog->blog_description))) !!}</textarea>
                        @error('blog_description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Tag*</label>
                        <input type="text" name="tag" class="form-control fancy-input" value="{{ old('tag', $blog->tag) }}">
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
                        @if(!empty($blog->image))
                            <p class="mt-2">Current Image:</p>
                            <img src="{{ asset($blog->image) }}" width="150" style="border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="fancy-label">Alt Tag*</label>
                        <input type="text" name="alt_tag" class="form-control fancy-input" value="{{ old('alt_tag', $blog->alt_tag) }}">
                        @error('alt_tag')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>  
            

                <div id="faq-section">
                    @if($blog->faqs && $blog->faqs->count())
                        @foreach($blog->faqs as $faq)
                            <div class="row faq-item mb-3">
                                <div class="col-md-5">
                                    <label class="fancy-label">FAQ Question</label>
                                    <input type="text" name="question[]" class="form-control fancy-input" value="{{ $faq->question }}">
                                </div>
                                <div class="col-md-5">
                                    <label class="fancy-label">FAQ Answer</label>
                                    <textarea name="answer[]" class="form-control fancy-textarea" rows="2">{{ $faq->answer }}</textarea>
                                </div>
                                <div class="col-md-2 d-flex align-items-end">
                                    <button type="button" class="btn btn-danger remove-faq">Remove</button>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="row faq-item mb-3">
                            <div class="col-md-5">
                                <label class="fancy-label">FAQ Question</label>
                                <input type="text" name="question[]" class="form-control fancy-input">
                            </div>
                            <div class="col-md-5">
                                <label class="fancy-label">FAQ Answer</label>
                                <textarea name="answer[]" class="form-control fancy-textarea" rows="2"></textarea>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="button" class="btn btn-danger remove-faq">Remove</button>
                            </div>
                        </div>
                    @endif    
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

@endsection