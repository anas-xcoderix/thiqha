<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title', 'Thiqah - Home')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { poppins: ['Poppins', 'sans-serif'] },
                    colors: { primary: '#1a3a5c', accent: '#2563eb', gold: '#d4a843' },
                    borderRadius: {
                        'leaf-tl': '2.5rem 0 0 0',
                        'leaf-br': '0 0 2.5rem 0',
                    }
                }
            }
        }
    </script>
    <style>
        @media (min-width: 1537px) {
            .cards {
                display: grid !important;
                grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
            }
        }

    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #FAF8F4;
        }

        .btn-leaf {
            border-top-left-radius: 2.5rem;
            border-bottom-right-radius: 2.5rem;
        }


        .main-container {
            padding: 24px;
            width: 100%;
            box-sizing: border-box;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        ::-webkit-scrollbar{
            display: none;
        }
    </style>
</head>
<body>

@yield('content')


@include('partials.footer')


<script>
    let toggles = [document.getElementById('menu-toggle'), document.getElementById('menu-toggle-md')];
    let mobileMenu = document.getElementById('mobile-menu');

    toggles.forEach(btn => {
        if (btn) {
            btn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('flex');
            });
        }
    });



</script>
<script src="{{ asset('js/blog.js') }}"></script>

</body>
</html>
