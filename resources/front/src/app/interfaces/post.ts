export interface Post {
  id: number;
  title: string;
  slug: string;
  content: string;
  main_media: string;
  categorie_id: string;
  extrait: string;
  rating: number;
  nbr_votes: number;
  status: boolean;
  created_at: string;

}
