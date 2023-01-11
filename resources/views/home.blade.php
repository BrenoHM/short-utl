
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col h-screen bg-gray-200 justify-center items-center">
        <div class="md:w-4/4 mb-4 text-center flex flex-col justify-center items-center">
            <p class="mb-5">Colabore para que o site continue no ar, qualquer doação é bem vinda.</p>
            <img width="150" src="{{asset('images/qrcode-pix.png')}}" alt="Pix QRcode">
        </div>
        {{-- <h1 class="text-center mt-5 mb-5 text-2xl">Encurtar Url</h1> --}}
        <div class="md:w-2/4">
            <form action="" method="POST" class="p-5 md:flex justify-between rounded-md">
                <input
                    pattern="((https?:\/\/)|(\/)|(..\/))(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?"
                    type="text"
                    name="url"
                    class="px-10 py-5 w-full md:w-3/4 md:rounded-l-md outline-0"
                    placeholder="Ex: https://queroadotarumpet.com.br/"
                    required
                    autofocus
                >
                <button class="px-10 py-5 w-full md:w-1/4 bg-red-200 md:rounded-r-md hover:bg-red-300 hover:font-bold mt-4 md:mt-0">Encurtar</button>
                @csrf
            </form>
            @if (session('url'))
                <div class="text-center">
                    <a href="{{session('url')}}" target="_blank" class="text-orange-700">{{session('url')}}</a>
                </div>
            @endif
        </div>
        <div class="mt-5">
            <img width="300" src="https://www.agenciamestre.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2008/03/dicas-para-campanhas-google-ads-de-sucesso-e1579871528692.png.webp" alt="">
        </div>
    </div>
</body>
</html>