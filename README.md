# Multisearch Textarea

By Weng Fei Fung. An interface that lets you Find Text in a textarea. It highlights that line and scrolls that line into view in the textarea. Not only that, but it supports Find Next.

## Getting Started

You need jQuery. Then you have to include the multisearch-textarea.js file, then initiate the class:

```
    <script src="js/libs/multisearch-textarea.js"></script>
    <script>
    $(()=>{
      MultisearchTextarea({
        $input: $("#jump-to-line"),
        $searchBtn: $("#jump-to-line-btn"),
        $clearBtn: $("#jump-to-line-clear"),
        $textarea: $("#textarea")
      });
    })
    </script>
``` 
## Technical point

If you are changing the input text dynamically without user interaction, you need to trigger keyup so that the engine knows what to search for.
```
$("jump-to-line").val("some text we are searching").trigger("keyup");
```

## Author

* **Weng Fei Fung** - *Freelancer* - [Siphon880gh](https://github.com/Siphon880gh)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details