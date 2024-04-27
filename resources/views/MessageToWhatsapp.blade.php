<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FORM To Whatsapp</title>
</head>

<body>
    <div class="max-w-xl w-full mx-auto text-center min-h-screen flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold sm:text-3xl">Form To Whatsapp</h1>
        <form action="#" class="mx-auto mb-0 mt-8 max-w-md space-y-4" onsubmit="sendMessageToWhatsapp()">
            <input type="text" class="w-full rounded-lg border border-gray-300 p-4 pe-12 text-sm shadow-sm"
                placeholder="masukan nama anda" id="nama" />
            <input type="text" class="w-full rounded-lg border border-gray-200 p-4 pe-12 text-sm shadow-sm"
                placeholder="ketik pesan anda..." id="pesan" />
            <button type="submit"
                class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white w-full">
                Kirim Pesan
            </button>
        </form>
    </div>
    <script>
        // Send Message to whatsapp by direct message
        function sendMessageToWhatsapp() {
            const urlToWhatsapp = `https://wa.me/628119072423?text=Halo, nama saya ${nama.value}, ${pesan.value}`;
            window.open(urlToWhatsapp, "_blank");
        }

        // Dibawah ini script untuk redirect ke profile instagram pastikan di tag form sudah ada onsubmitnya

        // function sendMessageToInstagram() {
        //   const instagramUsername = "username_instagram"; // Ganti dengan username Instagram
        //   const urlToInstagram = `https://www.instagram.com/${instagramUsername}`;
        //   window.open(urlToInstagram, "_blank");
        // }

        // Dibawah ini script untuk redirect ke Direct Message di instagram

        // function sendRedirectMessageToInstagram() {
        //   const instagramId = "user_id"; //Ganti dengan User_Id instagram
        //   const instagramUrl = `https://www.instagram.com/direct/t/${instagramId}`;
        //   window.open(instagramUrl, "_blank");
        // }
    </script>
</body>

</html>
