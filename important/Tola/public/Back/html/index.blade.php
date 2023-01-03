<!DOCTYPE html>
<html lang="zxx" class="js">

@include('Back/html/head')

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('Back/html/sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
           <div class="nk-wrap ">
                <!-- main header @s -->
                @include('Back/html/header')
                <!-- main header @e -->
                <!-- content @s -->
                @include('Back/html/content')
                <!-- content @e -->
                <!-- footer @s -->
                @include('Back/html/footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    @include('Back/html/region')
    <!-- .modal -->
    <!-- JavaScript -->
    @include('Back/html/js')
</body>

</html>