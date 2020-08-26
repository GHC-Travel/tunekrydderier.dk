  <div class="space-y-1 border-b border-orange-600" wire:keydown.escape="$set('visible', false)">
      <label id="listbox-label" class="block text-sm leading-5 font-medium text-gray-700"
          wire:click="$toggle('visible')">
          <div class="relative">
              <input class="form-input block w-full py-2 pr-10 pl-10 sm:text-sm sm:leading-5 bg-transparent border-none"
                  type="search" autocomplete="on" aria-autocomplete="both" :autofocus="true" :placeholder="placeholder"
                  :aria-placeholder="placeholder" wire:model="search" />

              @if ($selected)
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                      @svg('heroicon-s-check', 'h-5 w-5 text-orange-600')
                  </div>
              @endif
          </div>
      </label>
      <div class="relative">
          @if ($visible)
              <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                  <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                      class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">
                      @foreach ($options as $option => $value)
                          <li role="option"
                              class="text-orange-600 cursor-default select-none relative py-2 pl-3 pr-9 group hover:bg-orange-600 hover:text-white"
                              wire:click="$set('selected', '{{ $selected === $option ? null : $option }}')">
                              <div class="flex space-x-2">
                                  <slot name="option" :option="option">
                                      <span
                                          class="truncate {{ $selected === $option ? 'font-semibold' : 'font-normal' }}">
                                          {{ $option }}
                                      </span>
                                  </slot>
                              </div>

                              @if ($selected === $option)
                                  <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-white">
                                      @svg('heroicon-s-check-circle', 'h-5 w-5 text-orange-600 group-hover:text-white')
                                  </span>
                              @endif
                          </li>
                      @endforeach
                  </ul>
              </div>
          @endif
      </div>
  </div>
