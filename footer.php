<footer id="contact" class="bg-[#071627] text-slate-300 pt-16 pb-12 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
            <!-- Col 1: About CTC -->
            <div>
                <h4 class="text-white font-extrabold text-lg mb-4">CAPITAL TRANSPORTATION</h4>
                <p class="text-slate-400 text-xs leading-relaxed mb-4">
                    Capital Transportation Company (CTC), established in 2014, delivers safe, professional vehicle rental and logistics across Puntland and Somalia.
                </p>
                <div class="text-[#f26522] font-semibold text-xs italic">
                    Reliable Transport. On Time, Every Time.
                </div>
            </div>

            <!-- Col 2: Fleet Types -->
            <div>
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Vehicle Fleet</h4>
                <ul class="space-y-2 text-xs text-slate-400">
                    <li>Toyota Land Cruiser 4x4</li>
                    <li>Toyota Hilux Double Cab</li>
                    <li>Armoured Vehicles</li>
                    <li>Toyota HiAce & Minibuses</li>
                    <li>Sedans & Probox</li>
                    <li>Heavy Trucks & Cargo</li>
                </ul>
            </div>

            <!-- Col 3: Key Hubs -->
            <div>
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Key Hubs</h4>
                <ul class="space-y-2 text-xs text-slate-400">
                    <li>Garowe (Head Office)</li>
                    <li>Bosaso Port & Logistics</li>
                    <li>Mogadishu Fleet Yard</li>
                    <li>Galkacyo & Qardho</li>
                    <li>Kismayo & Baidoa</li>
                    <li>Hargeisa & Lasanod</li>
                </ul>
            </div>

            <!-- Col 4: Contact -->
            <div>
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Get In Touch</h4>
                <p class="text-xs text-slate-400 mb-2"><i class="fa-solid fa-location-dot text-[#f26522] mr-2"></i> Main Road, Garowe, Puntland, Somalia</p>
                <p class="text-xs text-slate-400 mb-2"><i class="fa-solid fa-phone text-[#f26522] mr-2"></i> +252 90 779 3008</p>
                <p class="text-xs text-slate-400 mb-4"><i class="fa-solid fa-envelope text-[#f26522] mr-2"></i> info@capitaltransportco.com</p>
                <a href="https://wa.me/252907793008" target="_blank" rel="noopener" class="inline-block bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs px-4 py-2 rounded-lg">
                    <i class="fa-brands fa-whatsapp mr-1"></i> WhatsApp Operations
                </a>
            </div>
        </div>

        <div class="border-t border-slate-800 pt-8 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500">
            <p>&copy; <?php echo date('Y'); ?> Capital Transportation Company (CTC). All rights reserved.</p>
            <p class="mt-2 sm:mt-0">Established 2014 &bull; Puntland & Somalia</p>
        </div>
    </div>
</footer>

<!-- Structured Data / JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://capitaltransportco.com/#organization",
      "name": "Capital Transportation Company",
      "alternateName": "CTC",
      "foundingDate": "2014",
      "url": "https://capitaltransportco.com/",
      "slogan": "Reliable Transport. On Time, Every Time.",
      "telephone": "+252907793008",
      "email": "info@capitaltransportco.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Garowe",
        "addressRegion": "Puntland",
        "addressCountry": "SO"
      }
    },
    {
      "@type": "Service",
      "name": "Vehicle Rental Services in Somalia",
      "provider": {"@id": "https://capitaltransportco.com/#organization"},
      "areaServed": "Somalia",
      "description": "Reliable vehicle rental services in Somalia with professional drivers, 4x4 Land Cruisers, Hilux pickups, minibuses, buses and heavy trucks."
    }
  ]
}
</script>

<?php wp_footer(); ?>
</body>
</html>
