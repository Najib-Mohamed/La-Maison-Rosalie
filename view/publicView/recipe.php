 <?php require_once "./../view/publicView/inc/menuPublicView.php" ?>
      <!--=========Fond créme pour toute la section ================-->
     <section id="recettes" class="bg-[#FBF5E6] text-[#2F1B14] pb-16">
       
       <!-- ===  ===========  En-tete de la page recette  ===-->
         <div class="text-center py-20">
      <a href="#" class="text-[#B8860B] underline font-['Playfair_Display']">L'atelier Maison Rosalie</a>
      <h2 class="text-5xl font-bold font-['Playfair_Display'] mt-2">
         <span class="text-[#C9A45C] text-xl">◆</span> Recettes au chocolat
      </h2>
      <p class="text-sm mt-4">
         apprenez nos recettes délicieuses et trop bonne qu'on peut<br>
         manger quand on a faim ou quoi tu vois.
      </p>
   </div>

        <!--  === ==========Boutons des catégories ========= -->
        <!--============= Le bouton foncé = la catégorie choisie ============-->
         <div class="flex justify-center gap-5 mb-10">
             <button class="categorie bg-[#2F1B14] text-white px-8 py-1 font-['Playfair_Display']"> Ganache</button>
             <button class="categorie bg-[#F8EDD3] px-8 py-1 font-['Playfair_Display']">Praline</button>
             <button class="categorie bg-[#F8EDD3] px-8 py-1 font-['Playfair_Display']">Truffe</button>
        </div>

       <!-- ================= CARTE DE LA RECETTE ================= -->
   <article class="max-w-6xl mx-auto bg-white border border-[#C9A45C] rounded-lg">

      <!-- -----============== Partie du haut : image + infos =============----- -->
      <div class="grid grid-cols-2 gap-8 p-6">

         <!--================Image de la recette ================-->
         <img src="./assets/ganache-chocolat-thermomix-800x600.webp" alt="Ganache noir 85%" class="w-full h-72 object-cover border border-[#C9A45C] mt-8">

         <!-- ==============Infos de la recette ============-->
         <div>
            <!--============= Étiquette Moyen, en haut à droite============== -->
            <p class="text-right">
               <span class="bg-[#F8EDD3] px-6 py-2 font-bold font-['Playfair_Display']">Moyen</span>
            </p>

            <!-- ==============Titre ==============-->
            <h3 class="text-3xl font-bold font-['Playfair_Display'] mt-4">Ganache noir 85%</h3>

            <!--============== Description + lien "Lire plus" =============-->
            <p class="text-xs mt-2">
               lorem ipsum dolor sit amet consectetur 
               adipisicing elit. Quisquam, quod. Lorem ipsum 
               dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.
               <a href="#" class="text-[#B8860B] underline">Lire plus</a>
            </p>

            <!-- ===========Note : 4 étoiles rouges sur 5 ================-->
            <p class="text-red-600 text-lg mt-2">
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star text-gray-300"></i>
            </p>

           <!-- ==============Les 3 cases : temps de préparation, temps total, difficulté ==================-->
            <div class="grid grid-cols-3 gap-3 mt-4 text-center">
               <div class="border border-[#C9A45C] py-3">
                  <p class="text-xs">TEMPS PREP</p>
                  <p class="font-bold font-['Playfair_Display']">20 Mins</p>
               </div>
               <div class="border border-[#C9A45C] py-3">
                  <p class="text-xs">TEMPS TOT</p>
                  <p class="font-bold font-['Playfair_Display']">120 Mins</p>
               </div>
               <div class="border border-[#C9A45C] py-3">
                  <p class="text-xs">DIFFICULTÉ</p>
                  <p class="font-bold font-['Playfair_Display']">Moyen</p>
               </div>
            </div>

            <!-- ====== Portions : boutons =========- et + -->
            <div class="flex justify-between items-center bg-[#F8EDD3] border border-[#C9A45C] p-4 mt-6">
               <div>
                  <p class="text-xs font-bold">RENDEMENT DE LA RECETTE / PORTIONS</p>
                  <p class="text-xs mt-2">Cliquez pour changer les portions</p>
               </div>
               <div class="flex items-center gap-2 bg-white border border-[#C9A45C] rounded-full px-2 py-1">
                  <button id="moins" class="bg-[#F8EDD3] px-2">−</button>
                  <span class="font-bold font-['Playfair_Display']"><span id="portions">4</span> Pers</span>
                  <button id="plus" class="bg-[#F8EDD3] px-2">+</button>
               </div>
            </div>
         </div>
      </div>
         <!-- =========Les Ingredients =======---->
          <section class="border-t border-[#C9A45C] p-6">
            <!------ ====== Titre + ajusté pour x personnes ============  --->
                <div class= "flex justify-between items-center mb-4">
                    <h3 class="text-3xl font-bold font-['Playfair_Display']">
                      <i class="fa-solid fa-basket-shopping text-[#C9A45C] text-xl"></i>Les ingrédients </h3>
                    <p class="text-sm">ajusté pour <b><span id="portions-texte">4</span>personnes</b></p>
                </div>
      
         <!-- Carrousel : les cartes défilent de gauche à droite -->
         <div id="carrousel" class=" flex gap-4 overflow-x-auto scroll-smooth">

            <!-- Une carte = un ingrédient. data-quantite = quantité pour 4 personnes -->
            <div class=" flex-1 min-w-48 bg-[#FBF5E6] border border-[#C9A45C] rounded-xl p-2 text-center">
               <img src="./assets/ganache1.webp" alt="Chocolat noir" class="h-20 w-full object-cover rounded">
               <p class="font-bold font-['Playfair_Display'] text-sm mt-3">70% Chocolat noir</p>
               <p class="text-xs text-[#B8860B] mt-1"><span class="quantite" data-quantite="200">200</span>g</p>
            </div>

            <div class=" flex-1 min-w-48 bg-[#FBF5E6] border border-[#C9A45C] rounded-xl p-2 text-center">
               <img src="./assets/beurre.webp" alt="Beurre" class="h-20 w-full object-cover rounded">
               <p class="font-bold font-['Playfair_Display'] text-sm mt-3">Beurre</p>
               <p class="text-xs text-[#B8860B] mt-1"><span class="quantite" data-quantite="120">120</span>g</p>
            </div>

            <div class=" flex-1 min-w-48 bg-[#FBF5E6] border border-[#C9A45C] rounded-xl p-2 text-center">
               <img src="./assets/sucre.jpg" alt="Sucre" class="h-20 w-full object-cover rounded">
               <p class="font-bold font-['Playfair_Display'] text-sm mt-3">Sucre</p>
               <p class="text-xs text-[#B8860B] mt-1"><span class="quantite" data-quantite="120">120</span>g</p>
            </div>

            <div class="flex-1 min-w-48 bg-[#FBF5E6] border border-[#C9A45C] rounded-xl p-2 text-center">
               <img src="./assets/oeufs.jpg" alt="Œufs" class="h-20 w-full object-cover rounded">
               <p class="font-bold font-['Playfair_Display'] text-sm mt-3">Œufs</p>
               <p class="text-xs text-[#B8860B] mt-1"><span class="quantite" data-quantite="4">4</span></p>
            </div>

            <div class="flex-1 min-w-48 bg-[#FBF5E6] border border-[#C9A45C] rounded-xl p-2 text-center">
               <img src="./assets/cacoa.jpg" alt="Cacao en poudre" class="h-20 w-full object-cover rounded">
               <p class="font-bold font-['Playfair_Display'] text-sm mt-3">Cacao en poudre</p>
               <p class="text-xs text-[#B8860B] mt-1"><span class="quantite" data-quantite="30">30</span>g</p>
            </div>

         </div>
         <!---=======Fleches du carrousel ===== ----->
         <div class="flex justify-between mt-3">
            <button id="gauche" class="bg-[#2F1B14] text-[#C9A45C] w-7 h-7 rounded-full">
                <i class="fa-solid fa-chevron-left text-xs" ></i>
            </button >
            <button id="droite" class="bg-[#2F1B14] text-[#C9A45C] w-7 h-7 rounded-full">
               <i class="fa-solid fa-chevron-right text-xs"></i>
            </button >
         </div>
          </section>

          <!---=========Les étapes de la recette ==========-->
          <section class="border-t border-[#C9A45C] p-6">
            <h3 class="text-3xl font-bold font-['Playfair_Display'] mb-6">
                 <i class="fa-solid fa-list-ol text-[#C9A45C] text"></i> Les étapes
            </h3>
         <!---===== Une étape = une case à cocher + un titre + un text ======----->
         <div class="space-y-4">
            <label class="etape flex gap-3 bg-[#FBF5E6] border border-[#E5C98A] p-3 cursor-pointer">
               <input type="checkbox" class="mt-1">
               <div>
                  <p class="text-sm text-[#B8860B]">ÉTAPE 1</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Nisi quisquam tempore voluptatibus animi, aspernatur nam consectetur eaque inventore ratione delectus odio cupiditate dolorem 
                     a corrupti rerum possimus repellendus quidem voluptate.</p>
               </div>
            </label>
             <label class="etape flex gap-3 bg-[#FBF5E6] border border-[#E5C98A] p-3 cursor-pointer">
               <input type="checkbox" class="mt-1">
               <div>
                  <p class="text-sm text-[#B8860B]">ÉTAPE 1</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Nisi quisquam tempore voluptatibus animi, aspernatur nam consectetur eaque inventore ratione delectus odio cupiditate dolorem 
                     a corrupti rerum possimus repellendus quidem voluptate.</p>
               </div>
            </label>
             <label class="etape flex gap-3 bg-[#FBF5E6] border border-[#E5C98A] p-3 cursor-pointer">
               <input type="checkbox" class="mt-1">
               <div>
                  <p class="text-sm text-[#B8860B]">ÉTAPE 1</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Nisi quisquam tempore voluptatibus animi, aspernatur nam consectetur eaque inventore ratione delectus odio cupiditate dolorem 
                     a corrupti rerum possimus repellendus quidem voluptate.</p>
               </div>
            </label>
              <label class="etape flex gap-3 bg-[#FBF5E6] border border-[#E5C98A] p-3 cursor-pointer">
               <input type="checkbox" class="mt-1">
               <div>
                  <p class="text-sm text-[#B8860B]">ÉTAPE 1</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Nisi quisquam tempore voluptatibus animi, aspernatur nam consectetur eaque inventore ratione delectus odio cupiditate dolorem 
                     a corrupti rerum possimus repellendus quidem voluptate.</p>
               </div>
            </label>
             <label class="etape flex gap-3 bg-[#FBF5E6] border border-[#E5C98A] p-3 cursor-pointer">
               <input type="checkbox" class="mt-1">
               <div>
                  <p class="text-sm text-[#B8860B]">ÉTAPE 1</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Nisi quisquam tempore voluptatibus animi, aspernatur nam consectetur eaque inventore ratione delectus odio cupiditate dolorem 
                     a corrupti rerum possimus repellendus quidem voluptate.</p>
               </div>
            </label>
         </div>
          </section>
</article>   
</section>

<!-- ================= SECTION COMMENTAIRES ================= -->
<section id="commentaires" class="bg-[#FBF5E6] text-[#2F1B14] pb-16">
   <article class="max-w-6xl mx-auto bg-white border border-[#C9A45C] rounded-lg px-12 py-6">

      <!-- En-tête : titre, phrase, bouton -->
      <div class="text-center">
         <h2 class="text-5xl font-bold font-['Playfair_Display']">
            Commentaires et critiques<span class="text-[#B8860B] text-sm">◆</span>
         </h2>
         <p class="text-sm mt-2">Vos commentaire et réaction sont toujours les bienvenus.</p>
         <button class="w-96 bg-[#2F1B14] text-white text-sm py-2 mt-6 font-['Playfair_Display']">
            <i class="fa-solid fa-feather-pointed text-xs mr-2"></i> Écrivez un commentaire
         </button>
      </div>

      <!-- Commentaire 1 : photo + nom + email + étoiles + texte -->
      <div class="flex gap-4 bg-[#FBF5E6] border border-[#E5C98A] p-4 min-h-40 mt-6">
                   <!--- ===== Icon User =====-------->
   <div class="w-16 h-16 rounded-full flex items-center justify-center">
   <i class="fa-regular fa-user text-3xl text-[#2F1B14]"></i>
</div>
  
                    <div class="flex-1">
            <div class="flex justify-between">
               <div>
                  <p class="font-bold font-['Playfair_Display'] text-sm">Darrell Steward</p>
                  <p class="text-sm mt-1">Darrell.Steward@cf2000.com</p>
               </div>
               <!-- 3 étoiles rouges, 2 grises -->
               <p class="text-red-600 text-lg">
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star text-gray-300"></i><i class="fa-solid fa-star text-gray-300"></i>
               </p>
            </div>
            <p class="text-xs mt-3">
             Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Vero dolore autem similique minima eveniet, fugit sapiente necessitatibus cum consectetur laborum, deserunt
                quod temporibus perspiciatis nam odit vitae quia eaque harum! 
                lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dolore autem similique minima eveniet, fugit sapiente necessitatibus cum consectetur laborum, deserunt
                quod temporibus perspiciatis nam odit vitae quia eaque harum!
            </p>
         </div>
      </div>

      <!-- Commentaire 2 -->
      <div class="flex gap-4 bg-[#FBF5E6] border border-[#E5C98A] p-4 min-h-40 mt-6">
                  <!--- ===== Icon User =====-------->
   <div class="w-16 h-16 rounded-full flex items-center justify-center">
   <i class="fa-regular fa-user text-3xl text-[#2F1B14]"></i>
</div>
         <div class="flex-1">
            <div class="flex justify-between">
               <div>
                  <p class="font-bold font-['Playfair_Display'] text-sm">Annette Black</p>
                  <p class="text-sm mt-1">Annette.Black@cf2000.com</p>
               </div>
               <!-- 2 étoiles rouges, 3 grises -->
               <p class="text-red-600 text-lg">
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star text-gray-300"></i><i class="fa-solid fa-star text-gray-300"></i><i class="fa-solid fa-star text-gray-300"></i>
               </p>
            </div>
            <p class="text-xs mt-3">
               Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Vero dolore autem similique minima eveniet, fugit sapiente necessitatibus cum consectetur laborum, deserunt
                quod temporibus perspiciatis nam odit vitae quia eaque harum!
                lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dolore autem similique minima eveniet, fugit sapiente necessitatibus cum consectetur laborum, deserunt
                quod temporibus perspiciatis nam odit vitae quia eaque harum!
            </p>
         </div>
      </div>






 <!-- ================= FORMULAIRE : Note + Commentaire + Envoyer ================= -->
      <div class="bg-[#FBF5E6] border border-[#E5C98A] px-8 py-6 mt-6">
         <div class="grid grid-cols-2 gap-x-16">

            <!-- Note : 5 étoiles + texte + flèche (colonne de droite) -->
            <div class="col-start-2">
               <p class="text-sm font-bold mb-1">Note</p>
               
            <!-- Note : 5 étoiles + texte + flèche (colonne de droite) -->
            <div class="col-start-2">
               <p class="text-sm font-bold mb-1">Note</p>
                             <select class="w-full bg-white border border-[#E5C98A] px-3 py-2 text-sm">
                  <option>★★★★★ (5/5) excellent</option>
                  <option>★★★★☆ (4/5) très bon</option>
                  <option>★★★☆☆ (3/5) bon</option>
                  <option>★★☆☆☆ (2/5) moyen</option>
                  <option>★☆☆☆☆ (1/5) mauvais</option>
               </select>

            </div>
            </div>

         </div>

         <!-- Commentaire : grande case pour écrire -->
         <div class="mt-4">
            <p class="text-sm font-bold mb-1">Commentaire</p>
            <textarea class="w-full h-20 resize-none bg-white border border-[#E5C98A] p-2"></textarea>
         </div>

         <!-- Bouton Envoyer, à droite -->
         <div class="text-right mt-2">
            <button class="bg-[#2F1B14] text-white text-lg px-6 py-1 font-['Playfair_Display']">Envoyer</button>
         </div>
      </div>

   </article>
</section>



    <script src="./js/scripts.js"></script>

</body>

</html>