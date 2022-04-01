ClassicEditor.create(document.querySelector('#body'),{
    toolbar:[
        "heading",
        "|",
        "bold",
        "italic",
        "link",
        "bulletedList",
        "numberedList",
        "blockQuote",

    ],
    heading:{
        options:[
            {model: "paragraph", title: "paragraph", class: "ck-heading_;paragraph"},
            {
                model: "heading1",
                view: "h1",
                title: "heading1",
                class: "ck-heading_heading1",
            },
            {
                model: "heading2",
                view: "h2",
                title: "heading2",
                class: "ck-heading_heading2",
            }
        ]
    }
}).catch(error => {
    console.log(error)
})