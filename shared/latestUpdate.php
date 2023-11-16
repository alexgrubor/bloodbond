<div class="bg-blue-500 p-2 flex items-center">
    <div class="bg-red-600 w-[9rem] text-white font-bold px-4 py-2">
        Last Update
    </div>
    <div class="overflow-hidden relative w-full">
        <div class="animate-marquee whitespace-nowrap">
            <span class="text-white ml-4">Exciting News! The BloodBond community is thrilled to announce its upcoming blood donation camp. It's scheduled for <strong>22/12/2023</strong> at the Community Centre in AWO, Essen. This event is a collaboration with local healthcare providers and is open to all eligible donors. We'll have medical professionals on-site to ensure a safe and efficient donation process. Join us in this noble cause to save lives. Remember, your one donation can make a huge difference! Refreshments and certificates of appreciation will be provided to all donors. Spread the word and let's make this event a grand success. See you there!</span>
        </div>
    </div>
</div>

<style>
    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .animate-marquee {
        animation: marquee 30s linear infinite;
    }
</style>