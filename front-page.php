<?php
/* Template Name: CTC One-Page Home */
get_header();
?>

<!-- 1. HERO SECTION -->
<section class="relative bg-gradient-to-br from-[#0f2a4a] via-[#0d233a] to-[#071627] text-white py-20 lg:py-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <span class="inline-block bg-orange-500/20 text-[#f26522] border border-orange-500/30 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                Established 2014 &bull; 58+ Vehicles Across Somalia
            </span>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6">
                Reliable Vehicle Rental & Professional Drivers Across Somalia
            </h1>
            <p class="text-lg text-slate-300 leading-relaxed mb-8">
                Capital Transportation Company (CTC), established in 2014, provides safe, reliable and professionally managed vehicle rental services across Puntland and Somalia. From daily city movements to remote field missions and long-term projects, CTC provides dependable vehicles and experienced professional drivers for UN agencies, NGOs, government institutions, businesses and other organizations.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#request-form" class="bg-[#f26522] hover:bg-[#ea580c] text-white font-extrabold px-7 py-3.5 rounded-xl uppercase tracking-wider text-sm transition shadow-lg">
                    REQUEST A VEHICLE
                </a>
                <a href="https://wa.me/252907793008" target="_blank" rel="noopener" class="bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold px-7 py-3.5 rounded-xl uppercase tracking-wider text-sm transition shadow-lg flex items-center gap-2">
                    <i class="fa-brands fa-whatsapp text-lg"></i> WHATSAPP US
                </a>
            </div>
        </div>
    </div>
</section>

<!-- TRUST STRIP -->
<div class="bg-slate-100 border-y border-slate-200 py-4">
    <div class="max-w-7xl mx-auto px-4 flex flex-wrap justify-around text-xs font-bold text-slate-600 uppercase tracking-wider gap-4">
        <span><i class="fa-solid fa-id-card text-[#f26522] mr-2"></i> Professional Drivers</span>
        <span><i class="fa-solid fa-wrench text-[#f26522] mr-2"></i> Well-Maintained Vehicles</span>
        <span><i class="fa-solid fa-calendar-check text-[#f26522] mr-2"></i> Flexible Rental Terms</span>
        <span><i class="fa-solid fa-map-location-dot text-[#f26522] mr-2"></i> Coverage Across Somalia</span>
    </div>
</div>

<!-- 2. FLEET SECTION -->
<section id="fleet" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-[#f26522] font-extrabold uppercase text-xs tracking-widest">Our Fleet & Assets</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0f2a4a] mt-2">Comprehensive 58+ Vehicle Fleet</h2>
            <p class="text-slate-600 text-sm mt-3">From rugged 4x4s for deep field operations to armoured vehicles, passenger buses, and heavy cargo trucks.</p>
        </div>

        <?php
        $fleet = array(
            array("Toyota Land Cruiser 4x4", "Reliable 4x4 vehicles for field missions, remote travel, project supervision and challenging road conditions.", "fa-truck-pickup"),
            array("Toyota Hilux Double Cab", "Versatile 4x4 pickups for field teams, site visits, project operations and remote missions.", "fa-truck-monster"),
            array("Armoured Vehicles", "Enhanced transportation solutions for clients with specific security and operational requirements.", "fa-shield-halved"),
            array("Toyota HiAce & Minibuses", "Comfortable passenger vehicles for staff transportation, airport transfers, workshops and group movements.", "fa-van-shuttle"),
            array("Sedans & Probox", "Practical vehicles for city travel, airport transfers and routine business operations.", "fa-car"),
            array("Buses", "Reliable passenger transportation for staff, project teams, training participants and larger groups.", "fa-bus"),
            array("Heavy Trucks", "Heavy-duty transportation solutions for cargo movement, logistics operations, project supplies and inland transportation requirements.", "fa-truck-moving"),
        );
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($fleet as $v) : ?>
            <div class="bg-white rounded-2xl p-6 border border-slate-200 card-shadow flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-[#f26522] text-xl mb-4">
                        <i class="fa-solid <?php echo esc_attr($v[2]); ?>"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0f2a4a] mb-2"><?php echo esc_html($v[0]); ?></h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6"><?php echo esc_html($v[1]); ?></p>
                </div>
                <a href="#request-form" onclick="selectVehicle('<?php echo esc_js($v[0]); ?>')" class="w-full text-center bg-[#0f2a4a] hover:bg-[#f26522] text-white font-bold py-2.5 px-4 rounded-lg text-xs uppercase tracking-wider transition">
                    REQUEST THIS VEHICLE
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3. RENTAL SOLUTIONS -->
<section id="solutions" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-[#f26522] font-extrabold uppercase text-xs tracking-widest">Tailored Solutions</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0f2a4a] mt-2">Vehicle Rental Solutions</h2>
        </div>

        <?php
        $solutions = array(
            array("Daily & Short-Term Rental", "Flexible vehicle rental for daily assignments, meetings, temporary operations and short field missions.", "fa-calendar-day"),
            array("Monthly & Long-Term Rental", "Dedicated vehicles for projects, field offices and ongoing operations.", "fa-calendar-days"),
            array("Vehicle Rental with Driver", "Reliable vehicles with trained, licensed, vetted and experienced professional drivers.", "fa-user-tie"),
            array("Field Mission Transportation", "4x4 transportation for assessments, monitoring visits, project supervision, surveys and remote operations.", "fa-mountain-sun"),
            array("Staff Shuttle Services", "Scheduled staff transportation between offices, residences, airports and project locations.", "fa-users-gear"),
            array("Airport Transfers", "Reliable pickup and drop-off services for staff, consultants, visitors and organizational guests.", "fa-plane-arrival"),
            array("Dedicated Project Vehicles", "Vehicles and drivers assigned to specific projects or operations for agreed periods.", "fa-briefcase"),
        );
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($solutions as $s) : ?>
            <div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 card-shadow">
                <div class="w-10 h-10 bg-orange-100 text-[#f26522] rounded-lg flex items-center justify-center mb-4 text-lg">
                    <i class="fa-solid <?php echo esc_attr($s[2]); ?>"></i>
                </div>
                <h3 class="text-lg font-bold text-[#0f2a4a] mb-2"><?php echo esc_html($s[0]); ?></h3>
                <p class="text-slate-600 text-sm leading-relaxed"><?php echo esc_html($s[1]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. WHY CHOOSE CTC -->
<section id="why-choose" class="py-20 bg-[#0f2a4a] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-[#f26522] font-extrabold uppercase text-xs tracking-widest">Reliability & Excellence</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold mt-2">Why Choose CTC?</h2>
            <p class="text-orange-400 font-semibold mt-2 text-base">Reliable Transport. On Time, Every Time.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 text-center">
            <div class="bg-white/5 border border-white/10 rounded-xl p-5">
                <div class="text-3xl font-extrabold text-[#f26522] mb-1">58+</div>
                <div class="text-xs uppercase font-bold text-slate-300">Vehicles In Fleet</div>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-xl p-5">
                <div class="text-3xl font-extrabold text-[#f26522] mb-1">2014</div>
                <div class="text-xs uppercase font-bold text-slate-300">Established Year</div>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-xl p-5">
                <div class="text-3xl font-extrabold text-[#f26522] mb-1">24/7</div>
                <div class="text-xs uppercase font-bold text-slate-300">Operational Support</div>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-xl p-5">
                <div class="text-3xl font-extrabold text-[#f26522] mb-1">100%</div>
                <div class="text-xs uppercase font-bold text-slate-300">Vetted Drivers</div>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-xl p-5">
                <div class="text-3xl font-extrabold text-[#f26522] mb-1">12+</div>
                <div class="text-xs uppercase font-bold text-slate-300">Hubs Covered</div>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-xl p-5">
                <div class="text-3xl font-extrabold text-[#f26522] mb-1">Fast</div>
                <div class="text-xs uppercase font-bold text-slate-300">Same-Day Mobilization</div>
            </div>
        </div>
    </div>
</section>

<!-- 5. CLIENTS / PARTNERS SHOWCASE -->
<section id="clients" class="py-20 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-[#f26522] font-extrabold uppercase text-xs tracking-widest">Trusted Partners</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0f2a4a] mt-2 mb-10">Organizations & Clients We Support</h2>

        <?php
        $clients = array(
            array("name" => "CARE International", "logo" => "client-care.jpeg"),
            array("name" => "World Vision", "logo" => "client-worldvision.jpeg"),
            array("name" => "Adam Smith International", "logo" => "client-adamsmith.jpeg"),
            array("name" => "SIDRA Institute", "logo" => "client-sidra.jpeg"),
            array("name" => "INSO", "logo" => "client-inso.jpeg"),
            array("name" => "PSI", "logo" => "client-psi.jpeg"),
            array("name" => "NIS Foundation", "logo" => "client-nis.jpeg"),
            array("name" => "Ministry of Health Puntland", "logo" => "client-moh.jpeg"),
            array("name" => "Ministry of Planning Puntland", "logo" => "client-mopedic.jpeg"),
            array("name" => "Ministry of Justice Puntland", "logo" => "client-justice.jpeg"),
        );
        ?>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6">
            <?php foreach ($clients as $client) : ?>
            <div class="border border-slate-200 bg-white hover:bg-slate-50 rounded-xl p-4 flex flex-col items-center justify-center card-shadow transition">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $client['logo']); ?>" alt="<?php echo esc_attr($client['name']); ?>" class="h-14 max-w-full object-contain mb-3">
                <span class="text-xs font-bold text-slate-700"><?php echo esc_html($client['name']); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 6. COVERAGE -->
<section id="coverage" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-[#f26522] font-extrabold uppercase text-xs tracking-widest">Operational Reach</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0f2a4a] mt-2 mb-4">Wherever Your Mission Takes You</h2>
        <p class="text-slate-600 text-sm max-w-xl mx-auto mb-10">Garowe &bull; Bosaso &bull; Qardho &bull; Galkacyo &bull; Lasanod &bull; Badhan &bull; Dhahar &bull; Mogadishu &bull; Kismayo &bull; Baidoa &bull; Dhusamareeb &bull; Hargeisa</p>

        <?php
        $cities = array("Garowe", "Bosaso", "Qardho", "Galkacyo", "Lasanod", "Badhan", "Dhahar", "Mogadishu", "Kismayo", "Baidoa", "Dhusamareeb", "Hargeisa");
        ?>
        <div class="flex flex-wrap justify-center gap-3 max-w-4xl mx-auto">
            <?php foreach ($cities as $city) : ?>
            <span class="bg-white border border-slate-300 text-slate-800 font-semibold px-4 py-2 rounded-lg text-sm shadow-sm">
                <i class="fa-solid fa-location-pin text-[#f26522] mr-1.5"></i> <?php echo esc_html($city); ?>
            </span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 7. REQUEST A VEHICLE FORM -->
<section id="request-form" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-8 sm:p-12 shadow-xl">
            <div class="text-center mb-10">
                <span class="text-[#f26522] font-extrabold uppercase text-xs tracking-widest">Quick Booking</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0f2a4a] mt-2">Request a Vehicle</h2>
                <p class="text-slate-600 text-sm mt-2">Tell us what you need and our operations team will coordinate your deployment promptly.</p>
            </div>

            <form id="ctc-booking-form" onsubmit="handleFormSubmit(event)" class="space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Full Name *</label>
                        <input type="text" required class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none" placeholder="Enter your full name">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Organization / Company *</label>
                        <input type="text" required class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none" placeholder="UN Agency, NGO, or Business">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Phone / WhatsApp *</label>
                        <input type="tel" required class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none" placeholder="+252 ...">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Email Address *</label>
                        <input type="email" required class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none" placeholder="you@organization.org">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Pickup Location *</label>
                        <input type="text" required class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none" placeholder="e.g. Garowe">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Destination *</label>
                        <input type="text" required class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none" placeholder="e.g. Bosaso, Field Site">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Vehicle Type *</label>
                        <select id="vehicle_type" required class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none">
                            <option value="">Select Vehicle</option>
                            <option value="Toyota Land Cruiser 4x4">Toyota Land Cruiser 4x4</option>
                            <option value="Toyota Hilux Double Cab">Toyota Hilux Double Cab</option>
                            <option value="Armoured Vehicle">Armoured Vehicle</option>
                            <option value="Toyota HiAce & Minibuses">Toyota HiAce / Minibus</option>
                            <option value="Sedans & Probox">Sedan / Probox</option>
                            <option value="Buses">Bus</option>
                            <option value="Heavy Trucks">Heavy Trucks</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Number of Vehicles</label>
                        <input type="number" min="1" value="1" class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Start Date</label>
                        <input type="date" class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">End Date</label>
                        <input type="date" class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Service Type *</label>
                        <select required class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none">
                            <option value="Daily & Short-Term Rental">Daily & Short-Term Rental</option>
                            <option value="Monthly & Long-Term Rental">Monthly & Long-Term Rental</option>
                            <option value="Vehicle Rental with Driver">Vehicle Rental with Driver</option>
                            <option value="Field Mission Transportation">Field Mission Transportation</option>
                            <option value="Staff Shuttle Service">Staff Shuttle Service</option>
                            <option value="Airport Transfer">Airport Transfer</option>
                            <option value="Dedicated Project Vehicle">Dedicated Project Vehicle</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Driver Required?</label>
                        <select class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none">
                            <option value="Yes">Yes (CTC Professional Driver)</option>
                            <option value="No">No (Vehicle Only)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Additional Requirements</label>
                    <textarea rows="3" class="w-full bg-white border border-slate-300 rounded-lg px-4 py-3 text-sm focus:border-[#f26522] focus:outline-none" placeholder="Provide any special instructions, security, or route details..."></textarea>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button type="submit" class="w-full sm:w-auto bg-[#f26522] hover:bg-[#ea580c] text-white font-extrabold px-8 py-3.5 rounded-xl uppercase tracking-wider text-sm shadow-md transition">
                        REQUEST A VEHICLE
                    </button>
                    <a href="tel:+252907793008" class="w-full sm:w-auto text-center bg-[#0f2a4a] hover:bg-[#071627] text-white font-extrabold px-6 py-3.5 rounded-xl uppercase tracking-wider text-sm shadow-md transition">
                        <i class="fa-solid fa-phone mr-2"></i> CALL US
                    </a>
                    <a href="https://wa.me/252907793008" target="_blank" rel="noopener" class="w-full sm:w-auto text-center bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold px-6 py-3.5 rounded-xl uppercase tracking-wider text-sm shadow-md transition">
                        <i class="fa-brands fa-whatsapp mr-2"></i> WHATSAPP US
                    </a>
                </div>

                <div id="form-success" class="hidden p-4 bg-emerald-50 border border-emerald-300 text-emerald-800 rounded-xl text-center text-sm font-semibold">
                    Thank you. Your vehicle request has been received. The CTC team will contact you shortly.
                </div>
            </form>
        </div>
    </div>
</section>

<script>
function selectVehicle(name) {
    const select = document.getElementById('vehicle_type');
    if (!select) return;
    for (let i = 0; i < select.options.length; i++) {
        if (select.options[i].value === name || select.options[i].text.includes(name)) {
            select.selectedIndex = i;
            break;
        }
    }
}

function handleFormSubmit(e) {
    e.preventDefault();
    document.getElementById('form-success').classList.remove('hidden');
    document.getElementById('ctc-booking-form').reset();
}

document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});
</script>

<?php get_footer(); ?>
