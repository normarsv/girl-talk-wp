<div class="fixed z-10 inset-0 overflow-y-auto opacity-0 gt-modal" style="display: none" aria-labelledby="modal-title"
     role="dialog" aria-modal="true" id="question-modal">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 md:pb-20 text-center block sm:p-0">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white shadow-accent rounded text-left overflow-hidden transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl w-full relative">
            <button type="button" id="gt-close-modal" class="mt-3 absolute top-0 right-3" aria-label="Close modal">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div class="bg-white px-10 py-10">
                <div class="text-center sm:text-left">
                    <h3 class="text-5xl font-title" id="modal-title">
                        Question
                    </h3>
                    <p class="form-error hidden pr-4 mt-4 pt-2 text-sm text-red-500"></p>
                    <input type="text" name="question-title" class="rounded mt-10 w-full" aria-label="question title"
                           placeholder="Title" required/>
                    <textarea class="mt-6 w-full rounded" rows="10" name="question-body" aria-label="question body"
                              placeholder="Type your question here" required></textarea>
                    <input type="hidden" name="question-topic" value="{{$topic}}">

                    <button type="submit"
                            id="question-submit"
                            data-url="{{admin_url('admin-ajax.php')}}"
                            class="bg-accent mt-10 w-72 m-auto block px-4 py-2 rounded-lg font-semibold text-white">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
