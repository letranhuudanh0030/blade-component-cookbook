@props(['active'])

<div x-data="{ 
         activeTab: '{{ $active }}',
         tabs: [],
         tabHeadings: [],
         toggleTabs() {
            this.tabs.forEach(
               tab => tab.__x.$data.showIfActive(this.activeTab)
            )
         }
      }" 
      x-init="() => {
        tabs = [...$refs.tabs.children];
        tabHeadings = tabs.map(tab => tab.__x.$data.name);
        toggleTabs();
      }" 
      x-cloak>

   <div class="mb-3">
      <template x-for="(tab,index) in tabHeadings" :key="index">
         <button 
            x-text="tab" 
            @click="activeTab = tab; toggleTabs();"
            class="px-4 py-1 text-sm rounded hover:bg-blue-500 hover:text-white"
            :class="tab === activeTab ? 'bg-blue-500 text-white' : 'text-gray-800'" 
            role="tab"
            aria-selected="tab === activeTab"></button>
      </template>
   </div>

   <div x-ref="tabs">
      {{ $slot }}
   </div>
</div>