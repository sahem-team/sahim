<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>توصيل ساهم</title>
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>


</head>

<body id="contentToPrint" dir="rtl" class="font-almaria">
    <div class="bg-gray-200 mx-auto max-w-screen-lg p-8 ">
        <div>
            <img src={{ asset('assets/logos/6.png') }} alt="" class="w-[250px]">
        </div>
        <h1 class="bg-white mt-24 mb-6 text-6xl font-madani p-8 text-center">
            توصيل لتسلم تبرع
        </h1>
        <div>
            <h2 class=" border-b-2 border-b-sahem_pr-500 text-2xl pb-2 "> المتبرع</h2>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <p class="font-bold">الإسم : <span class="font-normal">{{$donation_request->Donation->donor->name}}</span> </p>
                <p class="font-bold">العنوان : <span class="font-normal">{{$donation_request->Donation->donor->location}}</span> </p>
                <p class="font-bold">الهاتف : <span class="font-normal">{{$donation_request->Donation->donor->contact_phone}}</span> </p>
                <p class="font-bold"> البريد الإلكتروني  : <span class="font-normal">{{$donation_request->Donation->donor->contact_email}}</span> </p>
            </div>
            <h2 class=" border-b-2 border-b-sahem_pr-500 text-2xl pb-2 mt-6 "> المؤسسة الخيرية المستفيدة</h2>
            <div class="grid grid-cols-2 gap-4 mt-4">
               <p class="font-bold">الإسم : <span class="font-normal">{{$donation_request->charity->name}}</span> </p>
                <p class="font-bold">العنوان : <span class="font-normal">{{$donation_request->charity->service_area}}</span> </p>
                <p class="font-bold">الهاتف : <span class="font-normal">{{$donation_request->charity->contact_phone}}</span> </p>
                <p class="font-bold"> البريد الإلكتروني  : <span class="font-normal">{{$donation_request->charity->contact_email}}</span> </p>
            </div>
            <div class="mt-12 flex flex-col justify-center items-center gap-4">
                <p class="font-madani text-4xl">كود التسليم</p>
                <div class="mt-2 bg-dark_1 p-4 text-3xl text-light_2 w-fit rounded-2xl">{{$donation_request->delivery_code}}</div>
            </div>
            <div class="w-full p-3 text-light_1 bg-dark_1 font-madani mt-8">
                <p>
                    يُقدم هذا الوصل للجهة المتبرعة من أجل تسلم التبرع .
                    نرجو من ممثل الجهة الخيرية تقديم هذا الوصل للمتبرعين عند استلام التبرعات. يُرجى تأكيد توفير نسخة من
                    هذا الوصل للمتبرع كدليل رسمي على تلقي التبرع. </p>
            </div>

        </div>

    </div>
</body>
<script>
    window.addEventListener('load', function() {
        // Function to print the page
        function printPage() {
            window.print(); // Print the page

            // After a short delay to allow the page to render, convert it to PDF
            setTimeout(function() {
                const pdf = new jsPDF(); // Create a new jsPDF instance
                pdf.addHTML(document.body, function() {
                    pdf.save('page_as_pdf.pdf'); // Save the PDF as 'page_as_pdf.pdf'
                });
            }, 2000); // Adjust the delay as needed (milliseconds)
        }

        printPage(); // Call the function to print the page and convert it to PDF
    });
</script>



</html>
