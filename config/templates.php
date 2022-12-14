<?php
return [
    'banner-heading' => [
        'field_name' => [
            'top_title' => 'text',
            'main_title' => 'text',
            'sub_title' => 'text',
            'image' => 'file',
        ],
        'validation' => [
            'top_title.*' => 'required|max:191',
            'main_title.*' => 'required|max:191',
            'sub_title.*' => 'required|max:300',
            'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
        ]
    ],

    'hero' => [
        'field_name' => [
            'title' => 'text',
            'sub_title' => 'text',
            'short_description' => 'textarea',
            'button_name' => 'text',
            'button_link' => 'url',
            'image' => 'file',
        ],
        'validation' => [
            'title.*' => 'required|max:100',
            'short_description.*' => 'required|max:2000',
            'button_name.*' => 'required|max:2000',
            'button_link.*' => 'required|max:2000',
            'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
        ]
    ],

    'about-us' => [
        'field_name' => [
            'title' => 'text',
            'sub_title' => 'text',
            'description' => 'textarea',
            'image' => 'file'
        ],
        'validation' => [
            'title.*' => 'required|max:100',
            'sub_title.*' => 'required|max:191',
            'description.*' => 'required|max:3000',
            'image.*' => 'nullable|max:3072|image|mimes:jpg,jpeg,png',
        ]
    ],

    'why-chose-us' => [
        'field_name' => [
            'title' => 'text',
            'sub_title' => 'text',
            'short_details' => 'textarea',
        ],
        'validation' => [
            'title.*' => 'required|max:100',
            'sub_title.*' => 'required|max:200',
            'short_details.*' => 'required|max:2000'
        ]
    ],
    'how-it-work' => [
        'field_name' => [
            'title' => 'text',
            'sub_title' => 'text',
        ],
        'validation' => [
            'title.*' => 'required|max:100',
            'sub_title.*' => 'required|max:100',
        ]
    ],


    'testimonial' => [
        'field_name' => [
            'title' => 'text',
            'sub_title' => 'text',
        ],
        'validation' => [
            'title.*' => 'required|max:100',
            'sub_title.*' => 'required|max:2000',
        ]
    ],

    'news-letter' => [
        'field_name' => [
            'title' => 'text',
            'sub_title' => 'text'
        ],
        'validation' => [
            'title.*' => 'required|max:100',
            'sub_title.*' => 'required|max:2000'
        ]
    ],

    'blog' => [
        'field_name' => [
            'title' => 'text',
            'sub_title' => 'text',
            'short_title' => 'text',
        ],
        'validation' => [
            'title.*' => 'required|max:100',
            'sub_title.*' => 'required|max:2000',
            'short_title.*' => 'required|max:2000'
        ]
    ],
    'faq' => [
        'field_name' => [
            'title' => 'text',
            'sub_title' => 'text',
            'short_details' => 'textarea',
        ],
        'validation' => [
            'title.*' => 'required|max:100',
            'sub_title.*' => 'required|max:100',
            'short_details.*' => 'required|max:2000'
        ]
    ],
    'we-accept' => [
        'field_name' => [
            'title' => 'text',
            'sub_title' => 'text',
            'short_details' => 'textarea',
        ],
        'validation' => [
            'title.*' => 'required|max:100',
            'sub_title.*' => 'required|max:100',
            'short_details.*' => 'required|max:2000'
        ]
    ],
    'contact-us' => [
        'field_name' => [
            'left_title' => 'text',
            'left_details' => 'textarea',
            'heading' => 'text',
            'short_details' => 'textarea',
            'address' => 'text',
            'email' => 'text',
            'phone' => 'text', 
            'footer_short_details' => 'textarea'
        ],
        'validation' => [
            'left_title.*' => 'required|max:100',
            'heading.*' => 'required|max:100',
            'address.*' => 'required|max:2000',
            'email.*' => 'required|max:2000',
            'phone.*' => 'required|max:2000'
        ]
    ],

    'message' => [
        'required' => 'This field is required.',
        'min' => 'This field must be at least :min characters.',
        'max' => 'This field may not be greater than :max characters.',
        'image' => 'This field must be image.',
        'mimes' => 'This image must be a file of type: jpg, jpeg, png.',
    ],
    'template_media' => [
        'image' => 'file',
        'thumbnail' => 'file',
        'youtube_link' => 'url',
        'button_link' => 'url',
    ]
];
