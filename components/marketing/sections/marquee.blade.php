<div
    x-data
    x-init="
            $nextTick(() => {
                const content = $refs.content;
                const item = $refs.item;
                const clone = item.cloneNode(true);
                content.appendChild(clone);
            });
    "
    class="relative w-full py-5 dark:bg-black container-block"
    >
    <div class="relative w-full py-3 mx-auto overflow-hidden text-lg italic tracking-wide text-black uppercase lg:container dark:text-white dark:bg-black sm:text-xs md:text-sm lg:text-base xl:text-xl 2xl:text-2xl">
        <div class="absolute left-0 z-20 w-40 h-full bg-gradient-to-r from-white to-transparent dark:from-black dark:to-transparent"></div>
        <div class="absolute right-0 z-20 w-40 h-full bg-gradient-to-l from-white to-transparent dark:from-black dark:to-transparent"></div>
        <div x-ref="content" class="flex animate-marquee">
            <div x-ref="item" class="flex items-center justify-around flex-shrink-0 w-full py-2 pl-10 space-x-10 text-black sm:pl-5 md:pl-4 lg:pl-0 sm:space-x-5 md:space-x-4 dark:text-white">
                <svg class="w-auto h-9 translate-y-0.5 fill-current" viewBox="0 0 2428 1004" xmlns="http://www.w3.org/2000/svg"><path d="M1221.47 109.639a73.59 73.59 0 0144.76 17.898c17.016 16.108 21.477 42.969 13.423 64.46-31.31 64.446-105.768 107.493-156.649 121.734-30.44 7.16-68.921 7.16-96.676-3.58-13.437 8.054-24.773 34.085-41.18 23.268-23.747-18.547-3.19-47.573-16.9-68.17-2.827-4.24-9.947-4.551-13.527-11.49-18.806-41.18 4.475-80.568 30.427-111.89 43.268-48.274 167.401-102.06 236.323-32.23zm-144.12 32.217c-24.175 4.474-51.476 14.993-66.236 32.23-14.773 17.223-24.163 34.02-15.214 51.917 31.335-23.267 46.549-55.497 81.464-75.185-.013-3.593 5.356-6.278-.013-8.962zm145.923 8.962c-61.775-5.383-108.323 41.179-152.187 85.924-2.685 7.16-18.793 15.214-6.264 23.268 59.09 5.37 115.483-11.62 158.451-51.023 12.542-11.634 21.465-26.847 15.227-42.969-2.685-6.251-9.001-12.516-15.227-15.2zm535.276 266.749c28.65 69.829 52.812 179.916 0 247.06-14.32 16.11-39.377 30.96-55.485 18.794-59.09-47.43-84.135-115.47-120.84-176.35-5.369-2.685-5.369 4.488-8.054 7.172-13.423 61.762 11.634 142.33-30.427 190.656-16.108 2.685-31.179-5.603-36.704-21.478-20.596-63.552.869-129.801 6.238-193.353 12.542-32.23 17.912-69.816 45.667-93.992 44.759 17.898 66.236 68.04 92.176 104.744 18.82 27.742 34.02 59.077 55.498 84.135 18.793-8.055 9.545-32.62 8.962-47.444-7.186-58.182-23.294-111.89-38.52-167.388-.87-14.318-8.924-38.494 6.264-47.443 40.336 17.911 57.313 59.972 75.225 94.887zm-270.33-21.491c0 13.437-10.738 30.22-19.713 32.23-85.925 13.424-181.707 5.37-262.262 32.217-2.685 9.844 8.95 11.634 15.214 14.318 68.908 10.74 141.435 13.424 208.58 30.44 35.498 9.014 48.35 51.036 51.035 85.938 1.648 27.522-8.936 60.867-35.81 79.673-66.223 42.074-167.374 40.271-234.531 1.803-25.668-14.396-50.129-37.586-51.918-66.237.155-22.748 9.857-40.66 25.965-49.233 64.46-25.965 144.12-11.62 199.63 21.478 3.554 17.911-15.822 16.939-25.096 23.28-61.775 35.81-108.31-40.257-165.598-12.54-8.054 5.369-13.877 20.349-4.474 25.07 70.71 31.335 149.49 8.949 219.305-10.74 8.055-2.684 17.912-10.738 18.794-18.792-2.685-28.65-34.902-34.902-55.498-42.956-60.867-15.214-127.999-15.214-193.353-21.478-12.529-2.685-28.495-11.414-32.217-21.478-7.16-21.478-7.16-51.023 8.949-68.921 83.24-73.41 209.449-67.132 315.075-47.444 7.172 2.633 15.226 5.318 17.924 13.372zm-391.167 34.02c8.054 85.924 12.528 165.61 10.739 256.01-1.79 11.62-15.214 14.318-24.163 18.793-14.319 2.685-32.827-.363-38.494-8.054-20.583-33.138-13.424-77.87-15.214-118.155 2.685-63.539 1.79-132.473 19.701-191.563 3.424-8.586 13.424-16.109 21.478-10.752 21.478 10.752 25.058 32.243 25.953 53.72zm994.521-12.53c4.306 7.238 8.807 18.418 0 23.269-40.284 17.898-94.874 9.844-141.435 15.213-12.529 10.74-22.386 28.637-17.924 44.759 4.5 2.685 8.508 6.77 13.45 6.251 28.624 1.803 71.605-13.423 90.425 13.424 4.59 7.99-.623 37.82-13.424 38.494-34.928 4.5-92.358-4.384-109.232 4.5-21.477 14.32-19.7 42.062-27.755 64.46 15.227 9.844 31.167-.233 49.22-2.697 33.151-5.37 69.856-15.214 102.954-8.055 6.265 11.634 15.227 24.176 8.95 38.495-56.432 44.758-129.218 90.632-206.764 58.182-29.105-13.047-42.074-57.287-32.217-94.86 6.251-26.861 33.993-52.814 17.003-81.464-2.685-12.542 4.488-23.268 15.227-25.952 29.532 0 23.254-36.705 38.48-53.721-17.003-18.793-59.958-17.898-55.484-55.498 20.596-10.739 45.667-7.159 68.909-10.739 52.812-10.752 111.89-17.016 165.636-10.752 10.7 2.153 25.032 23.268 33.981 36.692zM813.286 213.476c82.605 67.52 189.774 182.614 176.35 315.087-16.121 104.744-127.117 183.51-221.109 208.58-91.307 26.847-205.882 24.163-298.992 2.685-6.264 17.016-12.528 37.586-32.216 44.758-12.53 4.475-28.65 1.79-38.495-6.264-27.742-25.966-5.37-76.094-45.653-92.19-78.779-33.124-163.821-98.479-204.092-179.034-5.37-16.108.894-32.217 10.739-44.746 61.774-49.233 139.645-68.92 217.528-84.147 4.475 1.79 2.685-4.475 6.265-6.265 4.474-53.708 6.264-108.323 23.268-156.662 3.878-6.783 13.423-8.949 19.7-4.474 49.234 37.586 25.953 108.323 47.444 159.333 93.992 4.475 187.984 8.95 262.275 61.775 25.07 20.583 31.179 59.895 23.267 82.358-7.898 22.425-34.006 38.495-58.182 40.259-16.121 0-46.548 1.569-44.759-10.726 1.79-12.309 54.759-32.45 38.495-49.247-23.385-24.136-140.385-38.494-212.9-47.443-8.948-1.79-17.158.895-17.158 10.739-1.79 68.026-7.16 143.212 4.474 208.58.895 4.487 6.265 9.857 10.752 10.726 127.999 20.596 263.17 8.949 363.426-64.447 46.549-37.573 61.775-90.425 53.708-148.595-40.284-162.018-209.462-259.602-348.212-322.26-135.158-59.077-284.66-89.517-444.89-81.45-25.51 1.868-65.937 10.675-66.236 19.702-.298 9.026 45.797 6.186 40.271 23.267-5.512 17.068-52.359 6.94-66.236 2.685-13.878-4.254-12.529-24.176-8.95-36.704C38.084 7.593 135.513 2.599 179.519.433c243.469-6.277 478.91 86.444 633.768 213.042zM374.662 453.376c-61.775.895-127.117 7.16-184.404 28.638-11.634 4.474-25.966 17.003-17.017 32.23 23.268 31.321 56.548 57.04 87.728 75.185 31.179 18.119 72.514 41.18 110.113 46.562 8.95-58.196 8.95-115.483 8.054-175.455-3.592-1.79-.013-5.37-4.474-7.16zm1850.266-81.463c-2.684 77.87-75.211 126.222-75.211 204.092 2.684 2.685 4.5 6.265 8.054 4.501 58.208-63.565 115.483-153.977 200.525-180.824 22.412-1.79 42.658 17.677 51.036 32.23 29.546 59.077 22.412 142.33-18.78 196.037-42.502 52.722-116.39 105.626-200.5 96.664-34.901 85.938-59.116 176.35-72.54 270.342-7.159 18.793-24.149 1.79-34.888-1.79-72.5-57.287-12.97-208.943-8.054-228.294 4.915-19.299 24.318-64.823 38.507-102.94-34.02-60.855-12.542-134.277 15.2-190.67 21.479-37.599 51.05-75.198 85.951-103.835 4.436.013 8.016.908 10.7 4.487zm144.146 96.677c-10.739-1.79-15.226 12.542-24.162 15.226-41.166 46.549-82.358 93.097-102.954 148.595 27.768 3.58 51.023-14.319 75.211-24.163 41.166-25.965 67.132-68.908 64.447-118.154-1.803-8.08-8.962-14.345-12.542-21.504z" fill-rule="nonzero"></path></svg>
                <svg class="h-8 fill-current" viewBox="0 0 2499 1037" xmlns="http://www.w3.org/2000/svg"><path d="M261.062 466.768c-53.833-19.912-83.335-35.399-83.335-59.735 0-20.652 16.963-32.45 47.201-32.45 55.31 0 112.09 21.388 151.178 40.559l22.124-136.427c-30.973-14.752-94.397-39.088-182.151-39.088-61.947 0-113.573 16.223-150.443 46.46-38.352 31.71-58.263 77.434-58.263 132.744 0 100.293 61.211 143.07 160.769 179.203 64.159 22.86 85.547 39.088 85.547 64.16 0 24.336-20.652 38.346-58.263 38.346-46.46 0-123.153-22.86-173.302-52.356L0 786.087c42.771 24.337 122.417 49.409 205.017 49.409 65.63 0 120.204-15.487 157.08-44.984 41.293-32.45 62.682-80.381 62.682-142.328 0-102.511-62.683-145.282-163.717-181.416zm523.877-80.387l22.124-135.692H690.265V85.966l-157.035 25.84-22.677 138.883-55.232 8.96-20.675 126.732h75.68v266.227c0 69.32 17.7 117.257 53.833 146.754 30.238 24.336 73.745 36.134 134.956 36.134 47.196 0 75.957-8.109 95.868-13.275V678.416c-11.062 2.953-36.133 8.114-53.097 8.114-36.134 0-51.62-18.435-51.62-60.47V386.38h94.673zm350.752-143.618c-51.62 0-92.92 27.102-109.142 75.775l-11.062-67.849H855.459v573.745h182.887V452.017c22.865-28.026 55.31-38.159 99.558-38.159 9.59 0 19.911 0 32.45 2.213V247.188c-12.539-2.948-23.6-4.425-34.663-4.425zm171.095-48.86c53.098 0 95.869-43.507 95.869-96.604 0-53.839-42.771-96.61-95.869-96.61-53.838 0-96.609 42.771-96.609 96.61 0 53.097 42.771 96.604 96.61 96.604zm-92.184 56.786h183.628v573.745h-183.628V250.689zm703.999 51.62c-32.45-42.035-77.434-62.682-134.956-62.682-53.097 0-99.558 22.124-143.07 68.584l-9.585-57.522h-160.769v786.134l182.893-30.232V822.22c28.02 8.85 56.78 13.275 82.594 13.275 45.725 0 112.096-11.798 163.717-67.843 49.408-53.839 74.485-137.168 74.485-247.052 0-97.345-18.44-171.09-55.31-218.291zm-151.92 353.983c-14.75 28.025-37.61 42.777-64.159 42.777-18.435 0-34.662-3.69-49.408-11.062V415.142c30.973-32.445 58.993-36.134 69.32-36.134 46.46 0 69.32 50.15 69.32 148.23 0 56.045-8.11 99.557-25.073 129.054zm731.566-123.894c0-91.443-19.912-163.717-59-214.602-39.822-51.62-99.557-78.169-175.514-78.169-155.608 0-252.212 115.044-252.212 299.408 0 103.247 25.808 180.68 76.692 230.089 45.725 44.248 111.361 66.372 196.168 66.372 78.169 0 150.442-18.435 196.167-48.673l-19.912-125.365c-44.989 24.336-97.345 37.61-156.344 37.61-35.398 0-59.734-7.378-77.434-22.864-19.175-16.223-30.237-42.771-33.921-80.382h303.097c.736-8.85 2.213-50.15 2.213-63.424zm-306.787-48.672c5.16-81.859 27.284-120.205 69.32-120.205 41.3 0 62.688 39.087 65.636 120.205H2191.46z" fill-rule="nonzero"></path></svg>
                <svg class="h-8 fill-current" viewBox="0 0 2500 829" xmlns="http://www.w3.org/2000/svg"><path d="M235.978 764.863L129.39 700.954l-64.695-64.62L0 571.714V0h271.862l64.446 64.41 64.444 64.409h291.49c287.02 0 291.506-.034 292.67-2.205.77-1.443 1.179-23.71 1.179-64.41V0h485.617l.295 64.124.294 64.125 63.84.57 63.84.57.301 33.915c.167 18.653.668 33.914 1.115 33.914.447 0 16.234-15.39 35.081-34.2l34.268-34.199h143.507l64.446-64.41L1943.142 0h270.72v62.205c0 40.699.408 62.966 1.18 64.41 1.15 2.146 3.229 2.204 78.95 2.204h77.767l64.12 64.128L2500 257.076v428.76l-106.874 71.49-106.874 71.49-71.487-.022-71.486-.02-.333-34.108c-.183-18.757-.698-34.47-1.143-34.915-.444-.444-22.818 14.904-49.717 34.107l-48.905 34.915h-129.136v-34.2c0-26.69-.315-34.2-1.432-34.2-.788 0-16.815 15.39-35.618 34.2l-34.185 34.2h-229.167l-34.73-34.744c-19.102-19.11-35.13-34.347-35.618-33.858-.487.487-3.7 14.968-7.137 32.179-3.438 17.211-6.526 32.447-6.863 33.857l-.61 2.565h-200.04l-34.185-34.2c-18.802-18.81-34.83-34.2-35.618-34.2-1.117 0-1.432 7.511-1.432 34.2v34.2h-100.32c-55.175 0-100.318-.151-100.318-.338 0-1.795-13.816-68.576-14.285-69.044-.342-.344-16.381 15.128-35.641 34.379l-35.017 35.004H599.65l-34.216-13.68c-18.818-7.523-34.725-13.68-35.347-13.68-.686 0-1.132 5.386-1.132 13.68v13.68H342.567l-106.589-63.91zm106.59-200.568v-78.089l-63.84-.57-63.84-.57V343.707l63.84-.57 63.84-.57V186.39l-63.84-.57-63.84-.57-.57-63.84-.57-63.84H57.57l-.288 242.786-.288 242.785 49.866 49.914 49.867 49.915 92.92-.292 92.92-.292v-78.09zm593.67 28.751l49.861-49.909-.288-178.374-.289-178.374-78.37-.293-78.37-.293-.29 149.631-.289 149.632h-55.86l-.57-149.339-.57-149.338-78.369-.293-78.37-.293-.29 149.631-.289 149.632h-55.86l-.57-149.339-.57-149.338-78.374-.293-78.374-.293v457.152h486.241l49.86-49.909zm263.602-178.66V186.39l-78.374-.293-78.374-.293V642.97l78.374-.293 78.374-.293V414.387zm342.568 149.919v-78.65l-63.555-.295-63.554-.294V343.707l63.554-.294 63.555-.295v-157.28l-63.555-.295-63.554-.294-.57-63.84-.57-63.84h-156.18l-.286 242.81-.289 242.812 49.873 49.882 49.872 49.882h185.259v-78.65zm400.136-.012v-78.66h-92.217c-83.038 0-92.285-.178-92.91-1.801-.903-2.357-.903-136.537 0-138.894.625-1.623 9.872-1.803 92.91-1.803h92.217V185.816h-243.358l-49.32 49.32-49.319 49.32v259.859l49.32 49.32 49.32 49.318h243.357v-78.66zm214.6-70.964l.289-149.624h127.679l.57 149.339.57 149.339h156.178l.289-178.375.288-178.374-49.86-49.909-49.86-49.909h-91.933c-75.52 0-92.159-.273-93.202-1.53-.89-1.074-1.357-20.206-1.564-64.124l-.295-62.595h-156.179l-.292 291.268c-.16 160.197-.049 291.91.249 292.693.426 1.12 17.214 1.425 78.662 1.425h78.122l.288-149.624zM1199.84 92.907v-35.34h-156.178l-.302 34.189c-.167 18.801-.054 34.837.251 35.631.443 1.152 16.374 1.386 78.392 1.153l77.837-.293v-35.34z" fill-rule="nonzero"></path></svg>
                <svg class="hidden fill-current h-7 md:block" viewBox="0 0 704 335" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero"><path d="M407.451 27v54.605H476v19.574h-68.549v161.219c0 16.487 2.658 29.1 7.994 37.858 5.326 8.758 14.51 13.132 27.58 13.132 6.185 0 11.511-.34 15.978-1.028 4.466-.68 8.244-1.548 11.341-2.577l2.578 18.545c-8.244 3.775-19.245 5.672-32.985 5.672-11.342 0-20.705-1.897-28.09-5.672-7.394-3.775-13.23-9.008-17.526-15.709-4.297-6.7-7.305-14.76-9.023-24.207-1.729-9.437-2.578-19.653-2.578-30.648V101.18H342V81.605h40.72V36.267L407.45 27zm108.272 55.01l56.592 153.35c4.797 12.012 9.086 23.335 12.856 33.96 3.77 10.635 7.37 21.1 10.802 31.386H597a1724.777 1724.777 0 0111.061-31.136c3.94-10.805 8.318-22.208 13.116-34.22L678.277 82H704l-98.263 247h-21.095L490 82.01h25.723zM150.117 29.041C172.077.14 202.607 0 202.607 0s4.544 27.176-17.277 53.345c-23.289 27.954-49.763 23.376-49.763 23.376s-4.974-21.98 14.55-47.68zm-11.275 67.5C150.16 96.54 171.165 81 198.515 81c47.075 0 65.588 33.449 65.588 33.449s-36.216 18.488-36.216 63.36c0 50.618 45.113 68.057 45.113 68.057s-31.533 88.644-74.134 88.644c-19.565 0-34.776-13.171-55.39-13.171-21.006 0-41.862 13.661-55.431 13.661C49.146 335.01 0 250.913 0 183.326 0 116.817 41.6 81.929 80.61 81.929c25.368 0 45.052 14.611 58.232 14.611z"></path></g></svg>
                <svg class="hidden h-6 fill-current lg:block" viewBox="0 0 2500 494" xmlns="http://www.w3.org/2000/svg"><path d="M1262.684 438.349c0 8.684 0 10.658 5.855 15.987l32.797 32.368v1.382H1155.92v-62.172c-14.638 40.974-53.349 68.073-96.428 67.5-74.756 0-129.02-59.21-129.02-168.157 0-102.04 58.553-170.132 140.731-170.132 36.428-2.316 70.329 18.901 84.52 52.895V70.855a17.066 17.066 0 00-6.638-16.579l-31.23-30.394V22.5l144.828-17.171v433.02zm-106.763-19.737V213.94a54.224 54.224 0 00-43.335-20.527c-35.33 0-69.487 32.369-69.487 128.487 0 90 29.473 121.777 66.17 121.777a58.382 58.382 0 0046.645-25.066h.007zm203.19 69.474V211.77a18.671 18.671 0 00-5.854-16.58l-32.211-33.552v-1.381h145.421V440.52c0 8.684 0 10.658 5.855 15.987l32.014 30.394v1.382l-145.224-.197zm-5.269-428.882c0-32.697 26.217-59.204 58.553-59.204 32.335 0 58.559 26.513 58.559 59.21 0 32.698-26.217 59.211-58.553 59.211-32.335 0-58.559-26.513-58.559-59.21v-.007zm504.954 378.553c0 8.684 0 11.25 5.855 16.579l32.796 32.368v1.382H1751.25V417.23c-13.316 44.803-53.875 75.658-100.132 76.184-64.802 0-99.546-47.763-99.546-138.157 0-43.619 0-91.382 1.362-145.066a16.875 16.875 0 00-5.855-15.987l-32.204-32.566v-1.381h144.243v180.197c0 59.21 8.593 98.684 45.283 98.684a58.487 58.487 0 0047.237-29.802V211.967a18.671 18.671 0 00-5.855-16.579l-32.401-33.75v-1.381h145.414v277.5zm495.007 50.329c0-10.658 1.954-146.448 1.954-177.632 0-59.21-9.178-100.066-50.362-100.066a65.204 65.204 0 00-51.724 28.421 243.53 243.53 0 015.855 56.25c0 41.053-1.368 93.355-1.954 145.658a16.875 16.875 0 005.856 15.987l32.796 30.395v1.381H2149.44c0-9.868 1.947-146.447 1.947-177.631 0-60.198-9.17-100.066-49.77-100.066a58.46 58.46 0 00-48.407 29.21V441.31c0 8.684 0 10.658 5.855 15.987l32.013 30.395v1.381h-145.224V212.757a18.671 18.671 0 00-5.855-16.58l-32.21-34.539v-1.381h145.42v70.263c13.487-46.382 56.448-77.553 104.23-75.592 48.409 0 81.198 27.236 95.06 78.947 15.395-47.69 59.697-79.69 109.303-78.947 64.802 0 101.5 48.355 101.5 139.736 0 43.619-1.362 93.356-1.948 145.658a15.868 15.868 0 006.632 15.987L2500 486.704v1.382h-146.197zm-1826.79-43.027l43.138 41.645v1.382H351.342v-1.382l43.921-41.645a16.875 16.875 0 005.855-15.987v-266.25c0-11.25 0-26.447 1.948-39.473L255.5 493.42h-1.75l-152.836-340.46c-3.322-8.487-4.296-9.08-6.447-14.803v223.224a78.322 78.322 0 007.23 43.618l61.48 81.71v1.382H0v-1.381l61.487-81.908a78.526 78.526 0 007.217-43.421v-246.71a48.132 48.132 0 00-10.145-33.75l-43.526-57.04V22.5h156.151l130.777 288.355L417.125 22.5h152.829v1.382l-42.94 48.355a17.066 17.066 0 00-6.639 16.579v340.263a15.868 15.868 0 006.645 15.987l-.007-.007zm171.184-133.42v1.38c0 84.474 43.139 118.422 93.691 118.422 42.21 1.454 81.283-22.48 99.546-60.987h1.369c-17.566 83.487-68.71 122.96-145.224 122.96-82.566 0-160.447-50.328-160.447-166.973 0-122.566 78.079-171.513 164.348-171.513 69.494 0 143.467 33.158 143.467 139.736v16.974h-196.75zm0-16.975h96.23v-17.17c0-86.843-17.763-109.935-44.506-109.935-32.401 0-52.112 34.54-52.112 127.105h.388z" fill-rule="nonzero"></path></svg>
                <svg class="hidden h-6 fill-current sm:block" viewBox="0 0 110 21" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M56.63 10.2c-.908 0-1.563.287-2.226.58v6.622c.635.059 1 .059 1.603.059 2.18 0 2.48-.963 2.48-2.308V11.99c0-.993-.342-1.79-1.857-1.79Zm-14.478-.362c-1.513 0-1.858.801-1.858 1.793v.557h3.714v-.557c0-.992-.345-1.793-1.856-1.793Zm-28.048 6.893c0 .785.384 1.193 1.231 1.193.91 0 1.447-.286 2.11-.58v-1.57H15.46c-.941 0-1.355.168-1.355.957Zm56.61-6.532c-1.515 0-2.04.798-2.04 1.791v3.624c0 .995.525 1.795 2.04 1.795 1.511 0 2.04-.8 2.04-1.795V11.99c0-.993-.529-1.79-2.04-1.79ZM6.68 20.795H2.225V10.396H0V6.813h2.226V4.661C2.226 1.738 3.482 0 7.052 0h2.972v3.584H8.166c-1.39 0-1.481.5-1.481 1.435l-.006 1.794h3.366l-.394 3.583H6.679v10.399Zm15.222.027h-3.713l-.16-.906a8.76 8.76 0 0 1-4.205 1.053c-2.723 0-4.172-1.755-4.172-4.18 0-2.863 1.691-3.884 4.716-3.884h3.079v-.619c0-1.46-.174-1.89-2.503-1.89h-3.808l.372-3.583h4.162c5.11 0 6.232 1.558 6.232 5.502v8.507Zm12.622-10.163c-2.31-.382-2.973-.466-4.084-.466-1.997 0-2.6.425-2.6 2.06v3.094c0 1.635.603 2.062 2.6 2.062 1.111 0 1.774-.086 4.084-.47v3.496c-2.023.437-3.341.552-4.455.552-4.782 0-6.682-2.425-6.682-5.93v-2.51c0-3.506 1.9-5.936 6.682-5.936 1.114 0 2.432.115 4.455.555v3.493Zm13.938 4.399h-8.167v.289c0 1.635.603 2.062 2.6 2.062 1.793 0 2.889-.086 5.194-.47v3.496c-2.223.437-3.382.552-5.564.552-4.782 0-6.684-2.425-6.684-5.93v-2.87c0-3.065 1.411-5.576 6.311-5.576s6.31 2.482 6.31 5.577v2.87Zm14.478.066c0 3.387-1.003 5.857-7.082 5.857-2.196 0-3.483-.186-5.906-.546V1.076L54.403.36v6.772c.962-.345 2.208-.52 3.34-.52 4.454 0 5.196 1.925 5.196 5.02v3.492Zm14.272.074c0 2.921-1.25 5.755-6.482 5.755-5.234 0-6.508-2.834-6.508-5.755v-2.821c0-2.923 1.274-5.757 6.508-5.757 5.232 0 6.482 2.834 6.482 5.757v2.82Zm14.263 0c0 2.921-1.252 5.755-6.483 5.755-5.234 0-6.508-2.834-6.508-5.755v-2.821c0-2.923 1.274-5.757 6.508-5.757 5.231 0 6.483 2.834 6.483 5.757v2.82Zm14.637 5.597h-4.826l-4.082-6.573v6.573H92.75V1.076l4.454-.717v12.695l4.082-6.24h4.826l-4.456 6.81 4.456 7.17ZM84.976 10.199c-1.513 0-2.038.798-2.038 1.791v3.624c0 .995.525 1.795 2.038 1.795 1.51 0 2.045-.8 2.045-1.795V11.99c0-.993-.534-1.79-2.045-1.79Zm23.677 8.143c.75 0 1.347.59 1.347 1.327 0 .748-.598 1.331-1.353 1.331-.751 0-1.36-.583-1.36-1.331 0-.737.609-1.327 1.36-1.327h.006Zm-.006.206c-.604 0-1.098.502-1.098 1.12 0 .63.494 1.126 1.104 1.126.61.006 1.097-.495 1.097-1.12 0-.624-.487-1.126-1.097-1.126h-.006Zm-.256 1.893h-.244v-1.48c.128-.018.25-.035.434-.035.232 0 .383.047.477.112.09.065.138.165.138.306 0 .195-.133.312-.298.36v.011c.134.024.225.141.256.359.036.23.073.318.097.366h-.256c-.036-.048-.073-.183-.104-.378-.036-.188-.134-.259-.33-.259h-.17v.638Zm0-.82h.177c.2 0 .371-.07.371-.254 0-.13-.096-.259-.37-.259-.08 0-.136.006-.178.012v.502Z"/></svg>
                <svg class="h-8 fill-current" viewBox="0 0 107 33" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M56.392 8.292c0 1.189-.97 2.147-2.173 2.147a2.155 2.155 0 0 1-2.172-2.147c0-1.19.936-2.147 2.172-2.147 1.238.033 2.173.99 2.173 2.147Zm-8.958 4.327v.529s-1.036-1.322-3.242-1.322c-3.644 0-6.485 2.742-6.485 6.54 0 3.766 2.808 6.54 6.485 6.54 2.24 0 3.242-1.353 3.242-1.353v.56c0 .265.2.463.468.463h2.707v-12.42h-2.707a.477.477 0 0 0-.468.463Zm0 7.96c-.501.728-1.504 1.355-2.707 1.355-2.14 0-3.778-1.321-3.778-3.568 0-2.246 1.638-3.567 3.778-3.567 1.17 0 2.24.66 2.707 1.354v4.427Zm5.181-8.423h3.209v12.42h-3.209v-12.42Zm47.934-.33c-2.206 0-3.243 1.322-3.243 1.322v-6.97h-3.208v18.399h2.707a.475.475 0 0 0 .468-.463v-.561s1.036 1.354 3.242 1.354c3.644 0 6.485-2.774 6.485-6.54 0-3.765-2.841-6.541-6.45-6.541Zm-.535 10.075c-1.237 0-2.206-.627-2.708-1.354V16.12c.502-.66 1.571-1.354 2.708-1.354 2.14 0 3.777 1.321 3.777 3.567 0 2.247-1.637 3.568-3.777 3.568Zm-7.587-4.69v7.399h-3.21v-7.036c0-2.048-.668-2.874-2.472-2.874-.97 0-1.972.496-2.609 1.223v8.654h-3.208v-12.42h2.54c.267 0 .468.231.468.462v.529c.936-.958 2.173-1.322 3.41-1.322 1.403 0 2.573.397 3.51 1.19 1.135.925 1.57 2.114 1.57 4.195Zm-19.288-5.385c-2.206 0-3.242 1.322-3.242 1.322v-6.97h-3.21v18.399h2.708a.475.475 0 0 0 .468-.463v-.561s1.037 1.354 3.242 1.354c3.644 0 6.485-2.774 6.485-6.54.034-3.766-2.807-6.541-6.451-6.541ZM72.604 21.9c-1.237 0-2.206-.627-2.707-1.354V16.12c.501-.66 1.57-1.354 2.707-1.354 2.14 0 3.777 1.321 3.777 3.567 0 2.247-1.637 3.568-3.777 3.568Zm-8.69-10.075c.968 0 1.47.165 1.47.165v2.94s-2.674-.892-4.345.991v8.688h-3.21V12.156h2.708c.268 0 .468.232.468.463v.529c.602-.694 1.906-1.322 2.908-1.322ZM30.586 23.454c-.167-.397-.334-.826-.501-1.19-.268-.594-.535-1.156-.769-1.684l-.033-.033a342.668 342.668 0 0 0-7.388-14.93l-.1-.2a64.707 64.707 0 0 1-.802-1.552c-.334-.595-.668-1.222-1.203-1.817C18.72.727 17.184 0 15.546 0c-1.672 0-3.176.727-4.278 1.982-.502.594-.87 1.222-1.204 1.817a71.38 71.38 0 0 1-.802 1.553l-.1.198c-2.574 4.955-5.08 9.976-7.387 14.93l-.034.066c-.234.53-.502 1.09-.77 1.685-.166.363-.333.76-.5 1.189-.435 1.222-.569 2.378-.401 3.568a7.035 7.035 0 0 0 4.345 5.483A6.93 6.93 0 0 0 7.123 33c.267 0 .601-.033.87-.066a8.9 8.9 0 0 0 3.342-1.123c1.37-.76 2.674-1.85 4.145-3.435 1.47 1.585 2.808 2.675 4.145 3.435A8.914 8.914 0 0 0 23.837 33c.936 0 1.871-.165 2.707-.529a7.022 7.022 0 0 0 4.346-5.483c.265-1.156.132-2.312-.303-3.534ZM15.512 25.17c-1.805-2.246-2.975-4.36-3.376-6.143-.167-.76-.2-1.42-.1-2.016.066-.528.267-.99.535-1.387.635-.891 1.705-1.453 2.942-1.453s2.34.528 2.941 1.453c.268.396.468.86.536 1.387.1.595.066 1.289-.1 2.016-.403 1.75-1.573 3.864-3.378 6.143Zm13.337 1.553c-.234 1.717-1.404 3.204-3.042 3.865-.802.33-1.671.43-2.54.33a6.646 6.646 0 0 1-2.54-.859c-1.204-.66-2.407-1.684-3.81-3.204 2.205-2.675 3.542-5.12 4.044-7.3a8.17 8.17 0 0 0 .167-2.808 5.32 5.32 0 0 0-.903-2.246c-1.037-1.487-2.775-2.346-4.713-2.346-1.938 0-3.677.892-4.713 2.346a5.325 5.325 0 0 0-.903 2.246 6.8 6.8 0 0 0 .167 2.808c.502 2.18 1.872 4.657 4.045 7.333-1.37 1.52-2.608 2.544-3.811 3.204-.87.496-1.705.76-2.54.86a5.407 5.407 0 0 1-2.54-.33c-1.638-.662-2.808-2.149-3.042-3.866a5.404 5.404 0 0 1 .3-2.576c.1-.331.268-.661.435-1.057.234-.529.501-1.091.769-1.652l.034-.066a358.427 358.427 0 0 1 7.353-14.832l.1-.198c.268-.495.536-1.024.803-1.52.267-.528.568-1.024.936-1.453.702-.792 1.637-1.222 2.674-1.222s1.972.43 2.674 1.222c.368.43.669.926.936 1.454.268.495.535 1.024.802 1.519l.1.198a435.208 435.208 0 0 1 7.321 14.865v.033c.268.53.502 1.123.77 1.653.166.395.333.725.434 1.056.266.858.367 1.684.233 2.543Z"/></svg>
            </div>
        </div>
    </div>
</div>