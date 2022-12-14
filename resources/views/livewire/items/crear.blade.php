<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div
        class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
    >
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-yellow-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-16 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog"
            aria-modal="true"
            aria-labelledby="modal-headline"
        >
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <table class="table table-">
                        <tr>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="n_item"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >Numero de Item:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="n_item"
                                        wire:model="n_item"
                                    />
                                </div>
                            </td>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="marca"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >Marca:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="marca"
                                        wire:model="marca"
                                    />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="monitor_serie"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >Monitor Serie:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="monitor_serie"
                                        wire:model="monitor_serie"
                                    />
                                </div>
                            </td>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="procesador"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >Procesador:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="procesador"
                                        wire:model="procesador"
                                    />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="memoria"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >Memoria:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="memoria"
                                        wire:model="memoria"
                                    />
                                </div>
                            </td>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="disco_duro"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >Disco Duro:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="disco_duro"
                                        wire:model="disco_duro"
                                    />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="memoria_serie"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >Memoria_serie:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="memoria_serie"
                                        wire:model="memoria_serie"
                                    />
                                </div>
                            </td>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="regulador_serie"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >regulador_serie:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="regulador_serie"
                                        wire:model="regulador_serie"
                                    />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="ups_serie"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >ups_serie:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="ups_serie"
                                        wire:model="ups_serie"
                                    />
                                </div>
                            </td>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="teclado_serie"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >teclado_serie:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="teclado_serie"
                                        wire:model="teclado_serie"
                                    />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="mouse_serie"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >mouse_serie:</label
                                    >
                                    <input
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="mouse_serie"
                                        wire:model="mouse_serie"
                                    />
                                </div>
                            </td>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="dualboot"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >dualboot:</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="dualboot"
                                        wire:model="dualboot"
                                    />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-4">
                                    <label
                                        for="estado"
                                        class="block text-gray-700 text-sm font-bold mb-2"
                                        >estado:</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="estado"
                                        wire:model="estado"
                                    />
                                </div>
                            </td>
                            <td>
                                <div
                                    class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
                                >
                                    <span
                                        class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto"
                                    >
                                        <button
                                            wire:click.prevent="guardar()"
                                            type="button"
                                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blue-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                        >
                                            Guardar
                                        </button>
                                    </span>
                                    <span
                                        class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto"
                                    >
                                        <button
                                            wire:click="cerrarModal()"
                                            type="button"
                                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                        >
                                            Cancelar
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
