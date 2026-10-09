<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://capitaltransportco.com/vehicle-rental-services/">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-slate-50 text-slate-800 antialiased selection:bg-orange-500 selection:text-white'); ?>>
<?php wp_body_open(); ?>

<!-- Top Info Bar -->
<div class="bg-[#071627] text-slate-300 text-xs py-2 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <div class="flex items-center space-x-6">
            <span><i class="fa-solid fa-location-dot text-[#f26522] mr-1.5"></i> Head Office: Garowe, Puntland, Somalia</span>
            <span class="hidden md:inline"><i class="fa-solid fa-shield-halved text-[#f26522] mr-1.5"></i> Established 2014 &bull; 58+ Vehicles</span>
        </div>
        <div class="flex items-center space-x-4">
            <a href="tel:+252907793008" class="hover:text-white"><i class="fa-solid fa-phone text-[#f26522] mr-1"></i> +252 90 779 3008</a>
            <a href="https://wa.me/252907793008" target="_blank" rel="noopener" class="text-emerald-400 hover:text-emerald-300"><i class="fa-brands fa-whatsapp mr-1"></i> WhatsApp</a>
        </div>
    </div>
</div>

<!-- Main Header / Navigation -->
<header class="sticky top-0 z-50 bg-[#0f2a4a] text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand / Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ctc-logo.jpeg'); ?>" alt="CTC Logo" class="h-12 w-auto object-contain bg-white rounded-lg p-1">
                    <div>
                        <span class="font-extrabold text-lg text-white tracking-wider block leading-tight">CAPITAL TRANSPORT</span>
                        <span class="text-[11px] text-orange-400 font-semibold uppercase tracking-widest block">Company &bull; Puntland, Somalia</span>
                    </div>
                <?php endif; ?>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center space-x-7 text-sm font-semibold text-slate-200">
                <a href="#services" class="hover:text-[#f26522] transition-colors">Services</a>
                <a href="#fleet" class="hover:text-[#f26522] transition-colors">Our Fleet</a>
                <a href="#solutions" class="hover:text-[#f26522] transition-colors">Rental Solutions</a>
                <a href="#why-choose" class="hover:text-[#f26522] transition-colors">Why Choose Us</a>
                <a href="#coverage" class="hover:text-[#f26522] transition-colors">Coverage</a>
                <a href="#clients" class="hover:text-[#f26522] transition-colors">Clients</a>
                <a href="#contact" class="hover:text-[#f26522] transition-colors">Contact</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="hidden sm:flex items-center space-x-3">
                <a href="https://wa.me/252907793008" target="_blank" rel="noopener" class="bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs uppercase px-4 py-2.5 rounded-lg transition shadow-md">
                    <i class="fa-brands fa-whatsapp mr-1 text-sm"></i> WhatsApp Us
                </a>
                <a href="#request-form" class="bg-[#f26522] hover:bg-[#ea580c] text-white font-bold text-xs uppercase px-4 py-2.5 rounded-lg transition shadow-md">
                    Request a Vehicle
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-2xl text-slate-200 hover:text-white focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown -->
    <div id="mobile-menu" class="hidden lg:hidden bg-[#071627] border-t border-slate-800 px-4 py-4 space-y-3 text-sm font-medium">
        <a href="#services" class="block text-slate-200 hover:text-[#f26522]">Services</a>
        <a href="#fleet" class="block text-slate-200 hover:text-[#f26522]">Our Fleet</a>
        <a href="#solutions" class="block text-slate-200 hover:text-[#f26522]">Rental Solutions</a>
        <a href="#why-choose" class="block text-slate-200 hover:text-[#f26522]">Why Choose Us</a>
        <a href="#coverage" class="block text-slate-200 hover:text-[#f26522]">Coverage</a>
        <a href="#clients" class="block text-slate-200 hover:text-[#f26522]">Clients</a>
        <a href="#request-form" class="block bg-[#f26522] text-white text-center py-2.5 rounded-lg font-bold">Request a Vehicle</a>
    </div>
</header>
