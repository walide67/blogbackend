export interface Category {
  id: number;
  name: string;
  slug: string;
  description: string;
  parent: number;
  language: string;
  status: boolean;
}
